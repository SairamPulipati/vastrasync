<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('unit')->nullable()->comment('Stock quantity or unit of measure');
            $table->integer('alert')->nullable()->comment('Low stock alert threshold');
            $table->unsignedBigInteger('category')->default(0);
            $table->unsignedBigInteger('brand')->default(0);
            $table->string('barcode')->nullable()->index();
            $table->decimal('tax', 8, 2)->default(0);
            $table->unsignedBigInteger('purchases')->nullable()->comment('PurchaseByAdmin reference ID');
            $table->string('type')->default('readymade')->comment('readymade or customized');
            $table->decimal('price', 12, 2)->default(0);
            $table->string('image')->nullable();
            $table->unsignedBigInteger('branch')->nullable()->comment('Branch ID');
            $table->string('productSize')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('customizeid')->nullable()->index();
            $table->tinyInteger('isactive')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
