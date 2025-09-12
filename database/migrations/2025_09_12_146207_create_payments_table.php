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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('year_id')->constrained()->restrictOnDelete();
            $table->string('month'); // e.g., 'January', 'February', etc.
            $table->decimal('amount', 10, 2);
            $table->foreignId('receipt_id')->constrained()->cascadeOnDelete();
            $table->foreignId('collected_by')->constrained('users')->restrictOnDelete();
            $table->timestamps();
            $table->unique(['user_id', 'year_id', 'month']); // prevent duplicate payment for same month
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
