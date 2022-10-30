<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $customers= [
        [
            'name'=>"yafa",
            'email'=>'yafa@g.com',
            'password'=>'0000',
            'phone'=>'050999',
        ],
        [
            'name'=>'ahmad',
            'email'=>'ahmad@g.com',
            'password'=>'1111',
            'phone'=>'05989'
        ]
        ];
        foreach ($customers as $key => $value) {
            Customer::create($value);
           } 
    }
}
