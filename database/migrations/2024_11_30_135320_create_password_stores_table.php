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
        Schema::create('password_stores', function (Blueprint $table) {
            if (Schema::hasTable('password_stores')) {
                Schema::dropIfExists('password_stores');
            }
    
            $table->id();
            $table->foreignId('user_id')->constrained('vault_users');
            $table->string('title')->nullable();
            $table->string('password');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_stores');
    }
};
