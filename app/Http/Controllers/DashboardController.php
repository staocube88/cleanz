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

class DashboardController extends Controller
{

   public function __construct()
	{
	 	$this->middleware('admin');
	}


	public function index()
	{
		return view('admin/dashboard');
	}

// POS functions
	public function pos()
	{
		$customers = Customer::all();
		$brands = Brand::all();
		$colors = Color::all();
		$fabrics = Fabric::all();
		$services = Services::all();

		return view('admin/POS', ['customers' => $customers , 'brands' => $brands, 'colors' => $colors, 'fabrics' => $fabrics, 'services' => $services] );
		
		//return view('admin/POS');
	}


	public function poc(){
		$customers = Customer::all();
		return view('admin/POC', ['customers' => $customers ]);

	}


//Order Controllers
public function order($cloth_id = null)
	{	
		// if($cloth_id != null){
		//     $clothes = Clothes::find($cloth_id);
  //   		return Response::json($clothes);
		// }
		// else{
			$orders = Orders::all();
			return view('admin/orders', ['orders' => $orders] );
		//}
	}

	public function print($id){
		$datas = Transaction::where('customer_id','=', $id)->orderBy('id','desc')->take(1)->get();
		return view('admin/print', ['datas' => $datas ]);
	}


	public function users()
	{
		return view('admin/users');
	}
}
