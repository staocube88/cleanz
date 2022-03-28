<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model {

	use SoftDeletes;
	//
	protected $table = 'transactions';
	protected $fillable = ['order_id', 'customer_id', 'amount_paid', 'balance', 'total', 'deliver_date', 'center'];

	protected $dates = ['delete_at'];

}
