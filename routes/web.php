<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/admin/dashboard', 'DashboardController@index');
Route::get('admin/POS', 'DashboardController@pos');

Route::get('admin/POC' , 'DashboardController@poc');
Route::get('admin/users', 'DashboardController@users');


Route::get('admin/cloth', function(){
	$clothes = App\Pricelist::all();
	return Response::json($clothes);
});


// Order Routes
Route::get('admin/orders', 'DashboardController@order');



//User Routes
Route::get('admin/users/{user_id?}', 'UserController@users');
Route::post('admin/users', 'UserController@PostUsers');
//Route::put('admin/clothes/{cloth_id?}', 'DashboardController@PutClothes');
Route::delete('admin/users/{user_id?}', 'UserController@DeleteUsers');


Route::get('admin/service', function(){
	$services = App\Services::all();
	return Response::json($services);
});



Route::post('admin/table/{test}', function(Request $request, $data){


	if($data == "brand" ){
		$task = App\Brand::create($request->all());
		$brand = App\Brand::all();
		return Response::json($brand);
	}
	
	if ($data == "color") {
		# code...
		$task = App\Color::create($request->all());
		$color = App\Color::all();
		return Response::json($color);
	}

	if($data == "fabric"){

	$task = App\Fabric::create($request->all());
	$fabric = App\Fabric::all();
	return Response::json($fabric);
	}
	
});


Route::post('admin/api/json', function(Request $request){

	$data = $request->all();
	$num = count($data);

	// $length = 12;
	// $characters = '0123456789';
	//  if (!is_int($length) || $length < 0) {
 //            return false;
 //        }
 //        $string = '';
 //        for ($i = $length; $i > 0; $i--) {
 //            $string .= $characters[mt_rand(0, strlen($characters) - 1)];
 //        }

	// $orderid = $string;

	for($i=0; $i<$num; $i++){

		App\Orders::create([
                          'order_id' => $data[$i][0],
                          'customer_id' => $data[$i][1],
                          'clothe' => $data[$i][2],
                          'service' => $data[$i][3],
                          'color' => $data[$i][4],
                          'fabric' => $data[$i][5],
                          'brand' => $data[$i][6],
                          'starch' => $data[$i][7],
                          'center' => $data[$i][8],
                          'discount' => $data[$i][9],
                          'quantity' => $data[$i][10],
                          'unit_cost' => $data[$i][11],
                          'total' => $data[$i][12],         

              ]);
	} 
	return  Response::json($data);
});


Route::get('admin/api/getdata/{cloth}/{service}', function($cloth, $service){
	$data = App\PriceList::where('cloth','=', $cloth)
							->where('service','=', $service)
							->get();
    return Response::json($data);

});


Route::get('admin/api/getcustomerID', function(){
	# code...
	$data = App\Customer::where('id','>', '0')->orderBy('id','desc')->take(1)->get();
	return Response::json($data);
});


Route::get('admin/api/getcustomer/transaction/{id}', function($id){
	# code...
	$data = App\Transaction::where('customer_id','=', "CLN".$id)->orderBy('id','desc')->take(1)->get();
	return Response::json($data);
});


Route::get('admin/api/getTransactionID', function(){
	$data = App\Transaction::where('id','>', '0')->orderBy('id','desc')->take(1)->get();
	return Response::json($data);
});


Route::post('/admin/api/transaction', function(Request $request){
	$transaction = App\Transaction::create($request->all());
	return Response::json($transaction);
});


Route::get('admin/print/{id?}', 'DashboardController@print');

Route::get('admin/test', function(){
	return view('admin.form');
});

//Customer Routes
Route::get('admin/customers/{customer_id?}', 'CustomerController@customers');
Route::post('admin/customers', 'CustomerController@PostCustomer');
Route::put('admin/customers/{customer_id?}', 'CustomerController@PutCustomer');
Route::delete('admin/customers/{customer_id?}', 'CustomerController@DeleteCustomer');

//PriceList Routes
Route::get('admin/pricelist/{pricelist_id?}', 'PricelistController@pricelist');
Route::post('admin/pricelist', 'PricelistController@PostPrice');
Route::put('admin/pricelist/{pricelist_id?}', 'PricelistController@PutPrice');
Route::delete('admin/pricelist/{pricelist_id?}', 'PricelistController@DeletePrice');

//Services Routes
Route::get('admin/services/{service_id?}', 'ServiceController@services');
Route::post('admin/services', 'ServiceController@PostServices');
Route::put('admin/services/{service_id}', 'ServiceController@PutServices');
Route::delete('admin/services/{service_id}', 'ServiceController@DeleteServices');

//Expenses Routes
Route::get('admin/expenses/{expenses_id?}', 'ExpensesController@expenses');
Route::post('admin/expenses', 'ExpensesController@PostExpenses');
Route::put('admin/expenses/{expenses_id?}', 'ExpensesController@PutExpenses');
Route::delete('admin/expenses/{expenses_id?}', 'ExpensesController@DeleteExpenses');


//Clothes Routes
Route::get('admin/clothes/{cloth_id?}', 'ClothesController@clothes');
Route::post('admin/clothes', 'ClothesController@PostClothes');
Route::put('admin/clothes/{cloth_id?}', 'ClothesController@PutClothes');
Route::delete('admin/clothes/{cloth_id?}', 'ClothesController@DeleteClothes');

//Admin Login Routes
Route::get('admin/login', 'AdminController@getLogin');
Route::post('admin/login', 'AdminController@postLogin');
Route::get('admin/logout', 'AdminController@getLogout');


//Super Admin Login
Route::get('admin/superlogin', 'SuperAdminController@getLogin');
Route::post('admin/superlogin', 'SuperAdminController@postLogin');
Route::get('admin/superlogout', 'SuperAdminController@getLogout');

// // Registration routes...
Route::get('admin/register', 'AdminController@getRegister');
Route::post('admin/register', 'AdminController@postRegister');

//Report routes
Route::get('admin/reports', 'ReportController@reports');
Route::delete('admin/api/reports/{transaction_id}','ReportController@DeleteTransaction');
Route::get('/admin/api/getReports/{id}', 'ReportController@getReports');
Route::get('/admin/api/getReportsBy/{center?}/{date?}', 'ReportController@getReportsByDate');

//Center routes
Route::get('admin/center/{center_id?}', 'CenterController@center');
Route::post('admin/center', 'CenterController@PostCenter');
Route::put('admin/center/{center_id?}', 'CenterController@PutCenter');
Route::delete('admin/center/{center_id?}', 'CenterController@DeleteCenter');
