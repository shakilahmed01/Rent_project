<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable()->unique();
            $table->string('phone1')->nullable();
            $table->string('photo')->nullable();
            $table->string('email')->nullable();
            $table->string('nationality')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('address')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('n_photo1')->nullable();
            $table->string('n_photo2')->nullable();
            $table->string('fav_qt1')->nullable();
            $table->string('fav_qt2')->nullable();
            $table->string('fav_qt3')->nullable();
            $table->string('fav_ans1')->nullable();
            $table->string('fav_ans2')->nullable();
            $table->string('fav_ans3')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('slug')->nullable();
            $table->text('avatar')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->integer('role_id')->default(2);
            $table->integer('otp')->nullable();
            $table->integer('terms')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
