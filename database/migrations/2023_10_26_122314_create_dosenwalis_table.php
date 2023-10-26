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
        Schema::create('dosenwalis', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('dosenwali');
            $table->integer('nip');
            $table->string('nama');
            $table->string('departemen')->default('Informatika');
            $table->string('fakultas')->default('Sains dan Matematika');
            $table->rememberToken();
            $table->timestamps();
        });
    }

};
