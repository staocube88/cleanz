<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Clothes extends Model {
	//
	protected $table = 'clothes';
	protected $fillable = ['name', 'pieces', 'description', 'staff'];
}
