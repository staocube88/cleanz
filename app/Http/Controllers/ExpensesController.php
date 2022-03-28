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

class ExpensesController extends Controller
{
    //
    public function __construct()
	{
	 	$this->middleware('admin');
	}

	
	public function expenses($expense_id = null)
	{	

		if($expense_id != null){
		    $expenses = Expenses::find($expense_id);
    		return Response::json($expenses);
		}
		else{
			$expenses = Expenses::all();
		return view('admin.expenses', ['expenses' => $expenses] );
		}

	}

	public function PostExpenses(Request $request)
	{
		$task = Expenses::create($request->all());
    	return Response::json($task);
	}

	public function PutExpenses(Request $request,$expense_id){
		    $expenses = Expenses::find($expense_id);
		    $expenses->title = $request->title;
		    $expenses->category = $request->category;
		    $expenses->amount = $request->amount;
		    $expenses->description = $request->description;
		    $expenses->staff = $request->staff;
		    $expenses->center = $request->center;
		    $expenses->save();
		    return Response::json($expenses);
	}

	public function DeleteExpenses($expense_id){
		 $expenses = Expenses::destroy($expense_id);
    	 return Response::json($expenses);
	}
}
