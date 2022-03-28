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

class ClothesController extends Controller
{
    //

    public function __construct()
	{
	 	$this->middleware('admin');
	}

	

//Clothes Functions
	public function clothes($cloth_id = null)
	{	
		if($cloth_id != null){
		    $clothes = Clothes::find($cloth_id);
    		return Response::json($clothes);
		}
		else{
			$clothes = Clothes::all();
			return view('admin/clothes', ['clothes' => $clothes] );
		}
	}
	public function PostClothes(Request $request)
	{
		$task = Clothes::create($request->all());
    	return Response::json($task);
	}

	public function PutClothes(Request $request,$cloth_id){
		    $clothes = Clothes::find($cloth_id);
		    $clothes->name = $request->name;
		    $clothes->pieces = $request->pieces;
		    $clothes->description = $request->description;
		    $clothes->save();
		    return Response::json($clothes);
	}

	public function DeleteClothes($cloth_id){
		 $cloth = Clothes::destroy($cloth_id);
    	 return Response::json($cloth);
	}
}
