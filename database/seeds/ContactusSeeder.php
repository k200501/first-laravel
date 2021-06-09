<?php

use App\contactus;
use Illuminate\Database\Seeder;

class ContactusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        contactus::truncate();
        factory(Contactus::class, 30)->create();
    }
}
