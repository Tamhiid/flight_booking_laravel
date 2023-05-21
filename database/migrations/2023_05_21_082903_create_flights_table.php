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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('source');
            $table->string('destination');
            $table->string('arrival');
            $table->string('departure');
            $table->integer('user_id');
            $table->integer('airline');
            $table->string('seats');
            $table->integer('price');
            $table->integer('duration');
            $table->string('status');
            $table->string('issue');
            $table->string('last_seat');
            $table->integer('bus_seats');
            $table->string('last_bus_seats');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
