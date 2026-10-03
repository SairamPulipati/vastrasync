<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->text('address')->nullable();
            $table->string('password');
            $table->integer('role')->default(1)->comment('1: Admin, 2: Branch Manager, 5: Salesman');
            $table->unsignedBigInteger('branch')->nullable();
            $table->tinyInteger('isactive')->default(1)->comment('1: Active, 0: Inactive, 2: Deleted');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
