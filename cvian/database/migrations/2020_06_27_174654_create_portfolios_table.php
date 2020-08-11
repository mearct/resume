<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('portfolios', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('image_portfolio')->nullable();
      $table->string('name_portfolio');
      $table->string('types_portfolio');
      $table->integer('status')->default(1);
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
    Schema::dropIfExists('portfolios');
  }
}
