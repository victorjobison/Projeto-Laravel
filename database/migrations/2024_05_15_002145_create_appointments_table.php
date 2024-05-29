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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->date('date');
            $table->time('time');
           /*
                $table->time('time_start')->nullable();
                $table->time('time_and')->nullable();
                $table->string('status');
                $table->string('category');
                $table->integer('frequency')->nullable(); 
            */
            $table->timestamps();

            /*
                $table->foreignId('id_user')->default(2)->after('id')->constrained('users');
                $table->foreignId('user_name')->default(2)->after('name')->constrained('users'); 
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
