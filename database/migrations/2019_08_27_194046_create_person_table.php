<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('campus_id');
            $table->foreign('campus_id')->references('id')->on('campuses');
            //$table->unsignedInteger('staff_id');
            //$table->foreign('staff_id')->references('id')->on('staff');
            $table->string('full_name');
            $table->text('job_email');
            $table->text('personal_email')->nullable();
            $table->enum('status', ['active', 'inactive', 'cancelled'])->default('active');
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
        Schema::dropIfExists('person');
    }
}
