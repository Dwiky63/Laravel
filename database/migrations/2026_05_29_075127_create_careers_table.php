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
        if (!Schema::hasTable('careers')) {
            Schema::create('careers', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('department')->nullable();
                $table->text('location')->nullable();
                $table->text('type')->nullable();
                $table->text('salary')->nullable();
                $table->text('description')->nullable();
                $table->text('requirements')->nullable();
                $table->enum('status', ['open', 'closed'])->default('open');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
