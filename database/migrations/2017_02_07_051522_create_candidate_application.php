<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
             $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->integer('mobile_number');
            $table->string('current_location');
            $table->string('preferred_location');
            $table->string('industry');
            $table->string('functional_area');
            $table->string('role');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('key_skills');
            $table->string('total_experience');
            $table->string('previous_employer')->nullable();
            $table->string('experience')->nullable();
            $table->string('annual_salary');
            $table->integer('landline_number');
            $table->string('address');
            $table->string('martial_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
