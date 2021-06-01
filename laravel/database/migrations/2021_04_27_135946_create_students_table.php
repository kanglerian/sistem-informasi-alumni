<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nim');
            $table->string('photo');
            $table->string('full_name');
            $table->string('gender');
            $table->date('birthday');
            $table->string('alumni');
            $table->string('telp');
            $table->string('email');
            $table->longText('address');
            $table->string('major');
            $table->string('year_sign');
            $table->string('status');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('tiktok');

            $table->softDeletes();
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
        Schema::dropIfExists('students');
    }
}
