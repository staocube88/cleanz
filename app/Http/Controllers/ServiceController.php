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

class ServiceController extends Controller
{
    //

    public function __construct()
	{
	 	$this->middleware('admin');
	 }

    public function services($service_id = null)
	{
		if ($service_id != null) {
			$services = Services::find($service_id);
			return Response::json($services);
		} else {
			$services = Services::all();
			return view('admin/services', ['services' => $services]);
		}
		
	}

	public function PostServices(Request $request){
		$task = Services::create($request->all());
		return Response::json($task);
	}

	public function PutServices(Request $request, $service_id){
		 	$clothes = Services::find($service_id);
		    $clothes->name = $request->name;
		    $clothes->description = $request->description;
		    $clothes->staff = $request->staff;
		    $clothes->save();
		    return Response::json($clothes);
	}

	public function DeleteServices($service_id){
		$service = Services::destroy($service_id);
		return Response::json($service_id);
	}
}
