<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobpostTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobpost', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->timestamps();
            $table->string('job_title',100);
            $table->string('job_type');
            $table->string('designation');
            $table->string('qualification');
            $table->string('job_location');
            $table->string('experience');
            $table->string('skills');
            $table->string('job_description');
            $table->string('job_condition')->nullable();
            $table->string('salary');
            $table->string('last_date_for_application');
            $table->string('number_of_vacanies');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobpost');
    }
}
