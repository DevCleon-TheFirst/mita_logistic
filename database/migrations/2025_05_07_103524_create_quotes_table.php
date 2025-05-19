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
        Schema::create('quotes', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
        $table->string('origin');
        $table->string('destination');
        $table->float('weight')->nullable();
        $table->text('item_description')->nullable();
        $table->string('dimensions')->nullable();
        $table->decimal('quote_amount', 10, 2)->nullable();
        $table->string('tracking_code')->unique();
        $table->string('status')->default('pending'); // pending, approved, declined
        $table->boolean('is_complete')->default(false);
        $table->string('loading_status')->default('pending'); // pending, loading, completed, failed
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
