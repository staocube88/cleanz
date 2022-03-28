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

use Response;
use App\Http\Requests;

use Illuminate\Http\Request;

class PricelistController extends Controller
{
    //
    public function __construct()
	{
	 	$this->middleware('admin');
	 }


	public function pricelist($price_id = null)
	{
	
	if ($price_id != null) {
		$pricelists = PriceList::find($price_id);
		return Response::json($pricelists);
	} else {
		$pricelists = PriceList::all();
		return view('admin.pricelist', ['pricelists' => $pricelists]);
	}
}

	public function PostPrice(Request $request){
		$task = PriceList::create($request->all());
		return Response::json($task);
	}

	public function PutPrice(Request $request, $price_id){
		$prices = PriceList::find($price_id);
		$prices->cloth = $request->cloth;
		$prices->service = $request->service;
		$prices->price = $request->price;
		$prices->save();
		return Response::json($prices);

	}

	public function DeletePrice($price_id){
		$price = PriceList::destroy($price_id);
		return Response::json($price);
	}


}
