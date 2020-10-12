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
            $table->string('email')->unique();
            $table->string('password');
            $table->string('firstname', 45)->nullable();
            $table->string('secondname', 45)->nullable();
            $table->string('patronymic', 45)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('phone', 11)->nullable();
            $table->string('gender', 1)->nullable();
            $table->string('passport', 100)->nullable();
            $table->string('address', 45)->nullable();
            $table->tinyInteger('role')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
