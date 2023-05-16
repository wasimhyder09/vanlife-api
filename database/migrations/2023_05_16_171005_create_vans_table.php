<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVansTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('vans', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->integer('rate');
      $table->string('category');
      $table->longText('description');
      $table->integer('owner');
      $table->text('image');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('vans');
  }
}
