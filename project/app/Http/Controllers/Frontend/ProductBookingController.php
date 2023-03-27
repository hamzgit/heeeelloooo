<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ProductBooking;
use App\Models\cart;
use Illuminate\Http\Request;
use Session;
use Omnipay\Omnipay;

class ProductBookingController extends Controller
{
    public function booking(Request $request) {

        $cart_id = $request->cart_id;
        $data = array();
        $amount = 0;

        foreach($cart_id as $i=>$value) {

            $cart = cart::find($value);
            $amount = $amount + $cart->product->price;
            $data[$i]['user_id'] = $cart->user_id;
            $data[$i]['product_id'] = $cart->product_id;
            $data[$i]['qty'] = $cart->qty;
            $data[$i]['paymet_status'] = '0';
        }

        $ProductBooking = ProductBooking::insert($data);
        $bookIds = ProductBooking::orderBy('id', 'desc')->take(count($data))->pluck('id');

        if($ProductBooking) {

            cart::destroy($cart_id);
        }
        if($request->payment_type == 'eway') {

            Session::put('bookIds', $bookIds);
            $url = $this->ewayPayment($amount);
            return response()->json(['type' =>'eway', 'url' => $url]);
        } else {

            return response()->json(['type' => 'pay_person']);
        }

       }

       public function ewayPayment($amount) {

        $total_amount = $amount;

    // ---- eWAY Credentials
        $apiKey = 'A1001CKALUuXprtxGkAa6iZt9q83BrzY27qMVP0Aklkzoru3QhxQeNekWtyeLV8x6FkXvu';
        $apiPassword = 'Qcrhk5bs';
        $apiEndpoint = 'Sandbox';

    // Create the eWAY Client
        $client = \Eway\Rapid::createClient($apiKey, $apiPassword, $apiEndpoint);

        // Transaction Details
        $transaction = [
            'RedirectUrl' => route('product.bookingSuccess'),
            'CancelUrl' => route('product.bookingFail'),
            'TransactionType' => \Eway\Rapid\Enum\TransactionType::PURCHASE,
            'Payment'=> [
                'TotalAmount' => $total_amount*100,
            ],

        ];

        // Submit Data To Eway To Get A Shared Page Url
        $response = $client->createTransaction(\Eway\Rapid\Enum\ApiMethod::RESPONSIVE_SHARED, $transaction);

        //Check for any errors
        $sharedURL = '';
        if (!$response->getErrors()) {
            $sharedURL = $response->SharedPaymentUrl;
        }

        return $sharedURL;

       }

       public function bookingFail() {

        Session()->forget('bookIds');
        return redirect()->route('product.add.to.cart');

       }

       public function bookingSuccess() {

        $bookIds = Session::get('bookIds');
        ProductBooking::whereIn('id', $bookIds)->update(['paymet_status' => '1']);
        Session::forget('bookIds');
        return redirect()->route('product.add.to.cart');
       }

       public function index() {
        $booking_product = ProductBooking::get();
        return view('Backend.ProductBooking.admin_viewOrders', compact('booking_product'));

       }

       public function destroy(Request $request) {

        $id = $request->id;
        $bookedProduct = ProductBooking::find($id);
        $bookedProduct->delete();
       }

       public function change_bookingStatus(Request $request) {

        $id = $request->id;
        $booking_status = $request->booking_status;

        $booking_status = ProductBooking::where('id', $id)->update(['booking_status' => $booking_status]);
       }

    }

