<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
	//
	protected $table = 'customer';
	protected $fillable = ['customer_id','title', 'name', 'mobile', 'email', 'address', 'discount', 'staff'];

}
