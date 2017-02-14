<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDesignationIdToJobpost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobposts', function (Blueprint $table) {
            $table->integer('designation_id')->nullable()->unsigned();
            //$table->foreign('designation_id')->references('id')->on('designation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::table('jobposts', function (Blueprint $table) {
        //    $table->dropColumn('designation_id');
        //});
    }
}
