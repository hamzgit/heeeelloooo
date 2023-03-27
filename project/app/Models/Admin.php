<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = "admin";
    protected $primaryKey ="id";

    //mutator

    // public function setNameAttribute($value)
    // {
    //     $this->attributes['first_name'] = ucwords($value);
    //     $this->attributes['last_name'] = ucwords($value);
    // }

    // public function getDobAttribute($value)
    // {
    //     return date( 'Y-m-d', strtotime($value));
    // }

	/**
	 * @return mixed
	 */
	public function getPrimaryKey() {
		return $this->primaryKey;
	}

	/**
	 * @param mixed $primaryKey
	 * @return self
	 */
	public function setPrimaryKey($primaryKey): self {
		$this->primaryKey = $primaryKey;
		return $this;
	}
}
