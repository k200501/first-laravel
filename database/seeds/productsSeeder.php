<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     //
    // }

    public function run()
    {
        for ($i=0; $i <20 ; $i++) {

        DB::table('products')->insert([
            'name' => Str::random(10),
            // 'email' => Str::random(10).'@gmail.com',
            'price' => rand(100,20000),
            'discount' => rand(0,100)/100,
            'discript' => Str::random(5),
            'img' => Str::random(7),
            // 'password' => 'password',
        ]);
            # code...
        }
    }
}
