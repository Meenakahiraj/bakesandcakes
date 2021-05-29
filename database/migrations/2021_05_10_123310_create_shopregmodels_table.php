<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopregmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopregmodels', function (Blueprint $table) {
            $table->id();
            $table->String('shname');
            $table->String('sadd');
            $table->String('sphno');
            $table->String('state');
            $table->String('suname');
            $table->String('spassword');
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
        Schema::dropIfExists('shopregmodels');
    }
}
