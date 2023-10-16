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
        Schema::create('multiple_term_relation_multiple', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('multiple_term_id');
            $table->unsignedInteger('relation_multiple_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multiple_term_relation_multiple');
    }
};
