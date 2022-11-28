<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pet_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->default('1')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('image')->default('istockphoto-1019950792-612x612.jpg');
            $table->integer('quantity')->default(1);
            $table->string('color')->default('black');
            $table->string('type')->default('cat');
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
        Schema::dropIfExists('carts');
    }
};
