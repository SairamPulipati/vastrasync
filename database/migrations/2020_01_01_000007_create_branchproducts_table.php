<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchproductsTable extends Migration
{
    public function up()
    {
        Schema::create('branchproducts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('branchid');
            $table->unsignedBigInteger('productid');
            $table->tinyInteger('isactive')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('branchproducts');
    }
}
