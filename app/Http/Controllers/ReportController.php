<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Center;
use App\Orders;
use Response;
use App\Http\Requests;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //

    public function __construct()
	{
	 	$this->middleware('admin');
	 }


	public function reports(){
		$centers = Center::all();
		$transactions = Transaction::all();
		return view('admin.reports', ['centers' => $centers, 'transactions' => $transactions] );
	}

	public function getReports($id){
		$data = Transaction::where('center','=', $id)->orderBy('id','asc')->get();
		return Response::json($data);
	}


	public function getReportsByDate($center, $date){
		$data = Transaction::where('center','=', $center )
				->where('created_at', 'like', '%' . $date . '%' )
				->orderBy('id','asc')->get();
		return Response::json($data);
	}
	
	public function DeleteTransaction($transaction_id){
		 $order = Orders::where('order_id','=', $transaction_id )->delete();

		 $trasaction = Transaction::where('order_id','=', $transaction_id )->delete();
    	 return Response::json($trasaction);
	}


}
