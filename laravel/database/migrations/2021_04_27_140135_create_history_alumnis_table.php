<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_alumnis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->integer('students_id');
            $table->integer('company_id');
            $table->string('position');
            $table->string('status');
            $table->longText('information');

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
        Schema::dropIfExists('history_alumnis');
    }
}
