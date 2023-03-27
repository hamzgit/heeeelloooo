<!-- info section -->
<section class="info_section ">
    <div class="container">
      <div class="info_container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <a href="">
                <img src="{{url('Frontend/images/logo.png ')}}" alt="">
                <span>
                   Exisso
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="{{url('Frontend/images/location.png')}}" alt="">
                <span>
                  Address
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="{{url('Frontend/images/phone.png')}}" alt="">
                <span>
                  +92 310100----
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="{{url('Frontend/images/mail.png')}}" alt="">
                <span>
                  Exisso@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        {{-- <div class="info_form">
          <div class="d-flex justify-content-center">
            <h5 class="info_heading">
              Newsletter
            </h5>
          </div>
          <form action="">
            <div class="email_box">
              <label for="email2" style="color:#f5e47b">Enter Your Email</label>
              <input type="text" id="email2">
            </div>
            <div>
              <button>
                Submitt
              </button>
            </div>
          </form>
        </div> --}}
        <div class="info_social">
          <div class="d-flex justify-content-center">
            <h5 class="info_heading">
              Follow Us
            </h5>
          </div>
          <div class="social_box">
            <a href="https://www.facebook.com/login/">
              <img src="{{url('Frontend/images/fb.png')}}" alt="">
            </a>
            <a href="https://www.instagram.com/">
                <img src="{{url('Frontend/images/insta.png')}}" alt="">
              </a>
            <a href="#">
              <img src="{{url('Frontend/images/linkedin.png')}}" alt="">
            </a>
            <a href="#">
                <img src="{{url('Frontend/images/twitter.png')}}" alt="">
              </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
 <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> Pakistan Biggest Jewellers
      <a href="https://html.design"></a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="{{url('Frontend/js/jquery-3.4.1.min.js ')}}"></script>
  <script type="text/javascript" src="{{ url('Frontend/js/bootstrap.js ')}}"></script>
  <script type="text/javascript" src="{{ url('Frontend/js/custom.js ')}}"></script>

{{-- // add to cart ------------------------------------------------------------------------ --}}
  <script src="{{ url('Frontend/cart/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ url('Frontend/cart/vendor/glightbox/js/glightbox.min.js')}}"></script>
      <script src="{{ url('Frontend/cart/vendor/nouislider/nouislider.min.js')}}"></script>
      <script src="{{ url('Frontend/cart/vendor/swiper/swiper-bundle.min.js')}}"></script>
      <script src="{{ url('Frontend/cart/vendor/choices.js/public/assets/scripts/choices.min.js')}}"></script>
      <script src="{{ url('Frontend/cart/js/front.js')}}"></script>
      @stack('footer-script')

      <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite -
        //   see more here
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');

      </script>
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </div>
  </body>
</html>

{{-- // ---------------------------------------------------------------------------------------------------- --}}
