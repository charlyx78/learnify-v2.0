<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->char('gender');
            $table->date('birthdate');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->text('profile_picture');
            $table->unsignedBigInteger('user_role');
            $table->foreign('user_role')->references('id')->on('user_role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
