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

class CustomerController extends Controller
{
    //
     public function __construct()
	{
	 	$this->middleware('admin');
	}

	//Customer Controllers
	public function customers($customer_id = null)
	{
		if($customer_id != null){
		    $customer = Customer::find($customer_id);
    		return Response::json($customer);
		}
		else{
			$customers = Customer::all();
			return view('admin.customers', ['customers' => $customers] );
		}
	}

	public function PostCustomer(Request $request){
		$customer = Customer::create($request->all());
		return Response::json($customer);
	}

	public function PutCustomer(Request $request, $price_id){
		$customer = Customer::find($price_id);
		$customer->title = $request->title;
		$customer->name = $request->name;
		$customer->mobile = $request->mobile;
		$customer->email = $request->email;
		$customer->address = $request->address;
		$customer->discount = $request->discount;
		$customer->save();
		return Response::json($customer);

	}

	public function DeleteCustomer($price_id){
		$price = Customer::destroy($price_id);
		return Response::json($price);
	}
}
