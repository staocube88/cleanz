<?php

namespace App\Http\Controllers;

use App\User;
use Response;
use App\Http\Requests;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function __construct()
	{
	 	$this->middleware('admin');
	}


	public function users($user_id = null)
	{	
		if($user_id != null){
		    $users = User::find($user_id);
    		return Response::json($users);
		}
		else{
			$users = User::all();
			return view('admin/users', ['users' => $users] );
		}
	}
	public function PostUsers(Request $request)
	{
		$task = User::create($request->all());
    	return Response::json($task);
	}

	// public function PutClothes(Request $request,$cloth_id){
	// 	    $clothes = Clothes::find($cloth_id);
	// 	    $clothes->name = $request->name;
	// 	    $clothes->pieces = $request->pieces;
	// 	    $clothes->description = $request->description;
	// 	    $clothes->save();
	// 	    return Response::json($clothes);
	// }

	public function DeleteUsers($user_id){
		 $user = User::destroy($user_id);
    	 return Response::json($user);
	}



}
