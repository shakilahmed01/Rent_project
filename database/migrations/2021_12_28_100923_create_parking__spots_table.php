<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingSpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking__spots', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('post_type');
            $table->string('title');
            $table->string('date');
            $table->string('phone');
            $table->string('division');
            $table->string('district');
            $table->string('thana');
            $table->string('address');
            $table->string('price');
            $table->string('floor_level');
            $table->string('floor_height');
            $table->string('description');
            $table->string('vehicle_type');
            $table->string('photo');
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->string('photo4')->nullable();
            $table->string('photo5')->nullable();
            $table->string('photo6')->nullable();
            $table->string('video')->nullable();
            $table->boolean('active')->nullable();
            $table->SoftDeletes();
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
        Schema::dropIfExists('parking__spots');
    }
}
