<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductssesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productsses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('產品名稱')->nullable();
            $table->integer('price')->comment('售價')->nullable();
            $table->float('discount')->comment('折扣')->nullable();
            $table->string('discript')->comment('內容')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productsses');
    }
}
