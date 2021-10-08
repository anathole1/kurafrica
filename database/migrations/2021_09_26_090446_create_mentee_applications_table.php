<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenteeApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentee_applications', function (Blueprint $table) {
            $table->id();
            $table->string('pname');
            $table->string('title');
            $table->string('address');
            $table->string('tel');
            $table->string('email');
            $table->string('p_av_time');
            $table->string('b_time_call');
            $table->string('child_name');
            $table->string('dob');
            $table->string('facility');
            $table->string('availability');
            $table->string('program_time');
            $table->string('c_school');
            $table->string('ac_year');
            $table->string('expections');
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
        Schema::dropIfExists('mentee_applications');
    }
}
