<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('dob');
            $table->string('gender');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('apply_for');
            $table->string('highest_education');
            $table->string('total_experince')->nullable();
            $table->string('prefered_location')->nullable();
            $table->string('current_designation')->nullable();
            $table->string('current_employer')->nullable();
            $table->string('current_annual_ctc')->nullable();
            $table->string('resume');
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
        Schema::dropIfExists('careers');
    }
}
