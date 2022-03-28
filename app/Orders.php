<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model {
	//
	protected $table = 'orders';
	protected $fillable = ['order_id', 'customer_id', 'clothe', 'service', 'color', 'fabric', 'brand', 'starch', 'center','discount', 'quantity', 'unit_cost', 'total'];

}
