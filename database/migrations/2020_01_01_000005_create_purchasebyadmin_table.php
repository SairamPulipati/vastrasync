<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasebyadminTable extends Migration
{
    public function up()
    {
        Schema::create('purchasebyadmin', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->unsignedBigInteger('supiler')->nullable()->comment('Supplier ID');
            $table->decimal('price', 12, 2)->default(0);
            $table->string('item')->nullable();
            $table->string('invoiceNumber')->nullable();
            $table->integer('quantity')->default(1);
            $table->string('units')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchasebyadmin');
    }
}
