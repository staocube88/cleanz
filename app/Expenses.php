<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model {
	//
	protected $table = 'expenses';
	protected $fillable = ['title', 'category', 'amount', 'description', 'staff', 'center'];

}
