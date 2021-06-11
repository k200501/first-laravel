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
            $table->string('name')->comment('姓名')->nullable();;
            $table->integer('price')->comment('價格')->nullable();;
            $table->float('discount')->comment('折扣')->nullable();;
            $table->text('discript')->comment('描述')->nullable();;
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
