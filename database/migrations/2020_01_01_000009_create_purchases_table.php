<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('transcationid')->index();
            $table->unsignedBigInteger('salesman')->nullable()->comment('Salesman user ID');
            $table->unsignedBigInteger('branch')->nullable()->comment('Branch ID');
            $table->string('trns')->nullable();
            $table->unsignedBigInteger('pos')->nullable()->comment('Cashier / POS User ID');
            $table->decimal('totalpurchase', 12, 2)->default(0);
            $table->decimal('discount', 12, 2)->default(0);
            $table->decimal('partialpay', 12, 2)->nullable();
            $table->tinyInteger('ispartiallypay')->default(0);
            $table->decimal('payment2', 12, 2)->nullable()->comment('Second / settlement payment');
            $table->string('sessionid')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
