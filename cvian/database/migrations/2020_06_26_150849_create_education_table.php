<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('education', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->date('date_education');
      $table->string('course_education');
      $table->string('school_education');
      $table->text('description_education');
      $table->string('image_education')->nullable();
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
    Schema::dropIfExists('education');
  }
}
