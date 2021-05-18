<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Measurement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurement', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('length')->nullable();
            $table->string('shoulder')->nullable();
            $table->string('armhole')->nullable();
            $table->string('chest')->nullable();
            $table->string('waist')->nullable();
            $table->string('front_neck')->nullable();
            $table->string('back_neck')->nullable();
            $table->string('sleeve_length')->nullable();
            $table->string('sleeve_round')->nullable();
            $table->string('hip')->nullable();
            $table->string('neck')->nullable();
            $table->string('Product_name')->nullable();
            $table->string('Product_code')->nullable();
            $table->string('category')->nullable();
            $table->string('customer_fullname')->nullable();
            $table->string('customer_number')->nullable();
            $table->string('status')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('measurement');
    }
}
