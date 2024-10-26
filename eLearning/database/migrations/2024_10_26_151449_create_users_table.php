<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_admin')->default(false); // to distinguish between admin and regular users
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users'); // Drops the users table if the migration is rolled back
    }
}