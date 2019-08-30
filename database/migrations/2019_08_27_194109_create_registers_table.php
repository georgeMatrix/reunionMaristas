<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('event_id')->default('1');
            $table->foreign('event_id')->references('id')->on('meetings');
            $table->unsignedInteger('person_id');
            $table->foreign('person_id')->references('id')->on('person');
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->tinyInteger('is_loading');
            $table->tinyInteger('is_food');
            $table->text('food_description')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('registers');
    }
}
