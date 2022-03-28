<?php

use App\Services;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Services::create([
                          'name' => "Laundry",
                          'description' => "Dry washing",
                          'staff' => "admin",
              ]);

        Services::create([
                          'name' => "Ironing",
                          'description' => "Dry washing",
                          'staff' => "admin",
              ]);

        Services::create([
                          'name' => "Steaming",
                          'description' => "Dry washing",
                          'staff' => "admin",
              ]);
    }
}
