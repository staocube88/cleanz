<?php

namespace App\Http\Controllers;

use App\User;
use App\Center;
use App\Permission;
use Validator;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class SuperAdminController extends Controller
{
    //

    public function getLogin(Request $request){

      // if(Auth::check()){
      //     return redirect()->guest('/admin/POS');
      // }
      // else{
    	return view('admin/superlogin');
      //}
    }


    public static function postLogin(Request $request) {
    	 $data = $request->all();
    	 $rules = array(
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|min:6'
                     );

    	  // Applying validation rules.
    	 $validator = Validator::make($data, $rules);

    	 $admin = User::where('email', '=', $request->get ('email'))->get();
    	 $adminlevel = "";
    	 	 foreach ($admin as $data) {
    			$adminlevel = $data->admin;
			}

		if($adminlevel == "1"){
			
			     if (Auth::attempt ( array (
                'email' => $request->get ( 'email' ),
                'password' => $request->get ( 'password' ) 
        ) )) {	
			    $permission = Permission::find(1);
				$permission->user = "true";
				$permission->save();

    	      	return redirect()->intended('/admin/dashboard');
           
        } else {
           $request->session()->flash('error', 'Invalids Credentials');
            return redirect('admin/superlogin');
        }

		}else{
				$request->session()->flash('error', 'You are not a super admin');
            	return redirect('admin/superlogin');
            	//Auth::logout();
			}
    	 
    }

    public function getLogout() {
        
    $permission = Permission::find(1);
				$permission->user = "false";
				$permission->save();
    Auth::logout();
    return redirect('/admin/superlogin');
}
}
