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
        Schema::create('invests', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('campaign_id');
            $table->string('name');
            $table->string('email');
            $table->string('city');
            $table->string('zipcode');
            $table->integer('investment_amount');
            $table->integer('equity_percentage');
            $table->string('payment_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invest');
    }
};
