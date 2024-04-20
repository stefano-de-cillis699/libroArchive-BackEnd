<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 10);
            $table->string('surname', length: 20)->nullable();
            $table->integer('age')->nullable();
            $table->string('codename', length: 10)->nullable();
            $table->string('hairColor', length: 10);
            $table->string('eyeColor', length: 10);
            $table->text('description')->nullable();
            $table->string('job', length: 50)->nullable();
            $table->string('origin', length: 50)->nullable();
            $table->string('image')->nullable();
            $table->foreignId('projectId')->constrained(
                table: 'projects', indexName: 'id'
            )->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
