<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosproductsTable extends Migration
{
    public function up()
    {
        Schema::create('posproducts', function (Blueprint $table) {
            $table->id();
            $table->string('tempid')->index();
            $table->unsignedBigInteger('productid');
            $table->decimal('price', 12, 2)->default(0);
            $table->integer('quantity')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posproducts');
    }
}
