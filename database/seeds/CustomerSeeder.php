<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
 		 Customer::create(
 		 	array(
 		 		'title' => "Alhaji",
 		 		'customer_id' => "1",
 		 		'name' => "Ojo",
 		 		'mobile' => "05959599595",
 		 		'email' => "ajobiewe@gmail.com",
 		 		'address' => "20 qwerty streeet",
 		 		'discount' => "10",
 		 		'staff' => "admin"
 		 		)
 		 	);

 		 Customer::create(
 		 	array(
 		 		'title' => "Mr",
 		 		'customer_id' => "2",
 		 		'name' => "Dayo",
 		 		'mobile' => "05959599595",
 		 		'email' => "ajobiewe@gmail.com",
 		 		'address' => "20 qwerty streeet",
 		 		'discount' => "10",
 		 		'staff' => "admin"
 		 		)
 		 	);


			Customer::create(
 		 	array(
 		 		'title' => "Mrs",
 		 		'customer_id' => "3",
 		 		'name' => "Femi",
 		 		'mobile' => "05959599595",
 		 		'email' => "ajobiewe@gmail.com",
 		 		'address' => "20 qwerty streeet",
 		 		'discount' => "10",
 		 		'staff' => "admin"
 		 		)
 		 	);


    }
}