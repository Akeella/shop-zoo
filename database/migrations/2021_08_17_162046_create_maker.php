<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreignId("maker_id")->references('id')->on('makers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makers');

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn("maker_id");
        });
    }
}
