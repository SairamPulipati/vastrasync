<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasedataTable extends Migration
{
    public function up()
    {
        Schema::create('purchasedata', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('purchaseid')->index();
            $table->unsignedBigInteger('product_id')->index();
            $table->decimal('purchasedprice', 12, 2)->default(0);
            $table->integer('quantity')->default(1);
            $table->string('paymentmode')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchasedata');
    }
}
