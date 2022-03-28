<?php

namespace App\Http\Controllers;


use App\Clothes;
use App\Customer;
use App\Brand;
use App\Color;
use App\Center;
use App\Fabric;
use App\Services;
use App\Orders;
use App\PriceList;
use App\Transaction;
use App\Expenses;

use Response;
use App\Http\Requests;

use Illuminate\Http\Request;

class CenterController extends Controller
{
    //
    public function __construct()
	{
	 	$this->middleware('admin');
	}

	public function center($center_id = null)
	{
	
	if ($center_id != null) {
		$centers = Center::find($center_id);
		return Response::json($centers);
	} else {
		$centers = Center::all();
		return view('admin.center', ['centers' => $centers]);
	}
	}

	public function PostCenter(Request $request)
	{
		$task = Center::create($request->all());
    	return Response::json($task);
	}

	public function PutCenter(Request $request,$center_id){
		    $center = Center::find($center_id);
		    $center->name = $request->name;
		    $center->location = $request->location;
		    $center->address = $request->address;
		    $center->save();
		    return Response::json($center);
	}

	public function DeleteCenter($center_id){
		 $center = Center::destroy($center_id);
    	 return Response::json($center);
	}
}
