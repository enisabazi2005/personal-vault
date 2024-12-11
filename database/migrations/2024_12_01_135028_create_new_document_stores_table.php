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
        Schema::create('new_document_stores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('vault_users');
            $table->string('title')->nullable();
            $table->string('documents_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_document_stores');
    }
};
