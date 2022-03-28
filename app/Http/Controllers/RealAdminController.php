<?php

namespace App\Http\Controllers;

use App\User;
use App\Center;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class AdminController extends Controller
{
    //

    public function getLogin(Request $request){

      if(Auth::check()){
          return redirect()->guest('/admin/POS');
      }
      else{
    	return view('admin/login');
      }
    }

    public function getRegister(){
	       if(Auth::check()){
          return redirect()->guest('/admin/POS');
      }
      else{
      $centers = Center::all();
      return view('admin/register', ['centers' => $centers ]);
      }
    }

    public static function postLogin(Request $request) {
    	 $data = $request->all();
    	 $rules = array(
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|min:6'
                     );

    	  // Applying validation rules.
    	 $validator = Validator::make($data, $rules);

       

    	      if (Auth::attempt ( array (
                'email' => $request->get ( 'email' ),
                'password' => $request->get ( 'password' ) 
        ) )) {
            return redirect()->intended('/admin/POS');
        } else {
           $request->session()->flash('error', 'Invalids Credentials');
            return redirect('admin/login');
        }
    }

    public function postRegister(Request $request) {
                $data = $request->all();
                $rules = array(
                    'name' => 'required',
                    'email' => 'required|email|max:255|unique:users',
                    'center' => 'required',
                    'password' => 'required|min:6',
                    'password_confirmation' => 'required|min:6'
                     );
            // Applying validation rules.
           $validator = Validator::make($data, $rules);
   try{
           User::create([
                          'name' => $request->get ('name'),
                          'email' => $request->get('email'),
                          'center' => $request->get('center'),
                          'password' => bcrypt($request->get('password')),
                          'admin' => "2",
                          'remember_token' => $request->get( '_token' ),
              ]);

            $request->session()->flash('message', 'Successfully registered! You can now login...');
            return redirect('admin/login');

    }catch(QueryException $exp){
                $error_code = $exp->errorInfo[1];

                if($error_code == 1062){
                    $request->session()->flash('error', 'Email has already been used!');
                     return redirect('admin/register');
                }
        }                
    }

 public function getLogout() {
    Auth::logout();
    return redirect('/admin/login');
}

}
