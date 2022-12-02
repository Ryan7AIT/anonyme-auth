<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('fname');
            $table->string('lname');

            $table->string('email')->unique();
            $table->foreignId('society_id')->nullable();
            // $table->string('status')->default('not_joind');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('tel')->default('0-123-456');
            $table->string('birth')->default('9 september 1976');
            $table->string('password');
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
};
