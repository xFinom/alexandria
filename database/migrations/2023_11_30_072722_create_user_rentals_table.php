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
        Schema::create('user_rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rental_copy_id');
            $table->foreignId('user_id');
            $table->integer('duration');
            $table->date('start_date');
            $table->date('return_date');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_rentals');
    }
};
