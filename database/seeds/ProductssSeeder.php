<?php

use App\Productss;
use Illuminate\Database\Seeder;

class ProductssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Productss::truncate();
        factory(Productss::class, 60)->create();
        //
    }
}
