<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseuserdetailsTable extends Migration
{
    public function up()
    {
        Schema::create('purchaseuserdetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('purchaseid')->index();
            $table->string('name');
            $table->unsignedBigInteger('branch')->nullable();
            $table->string('number')->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchaseuserdetails');
    }
}
