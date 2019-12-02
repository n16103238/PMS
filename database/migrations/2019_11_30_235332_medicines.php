<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Medicines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('medicines', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name', 100);
          $table->bigInteger('category_id')->unsigned();
          $table->float('purchase_price');
          $table->float('selling_price');
          $table->integer('quantity');
          $table->string('generic_name');
          $table->string('company');
          $table->string('effects');
          $table->date('expiry_date');
          $table->timestamps();
          $table->foreign('category_id')->references('id')->on('categories')->onCascade('delete');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
