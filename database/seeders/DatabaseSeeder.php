<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Head;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
         User::create([
             'type'=>'admin',
             'unique_id'=>rand(111111,999999),
             'name' => 'Admin',
             'email' => 'example@admin.com',
             'phone'=>"017 *** *** **",
             'gender'=>'male',
             'dob'=>Carbon::today(),
             'nid_number'=>'123 254 263 5698',
             'full_address'=>"Dhanmondi , Dhaka -1205 , Bangladesh",
             'is_approve'=>true,
             'password'=>Hash::make('example@admin.com'),
         ]);

        User::factory(0)->create();
    }
}
