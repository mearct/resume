<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('experiences', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->date('experiences_date_start');
      $table->date('experiences_date_end');
      $table->string('experiences_designation');
      $table->string('experiences_company');
      $table->text('experiences_description');
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
    Schema::dropIfExists('experiences');
  }
}
