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
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            //  Optionnel : suppression en cascade
            
            $table->foreignId('category_id') ->constrained()->cascadeOnDelete();
            $table->foreignId('author_id') ->constrained()->cascadeOnDelete();
            $table->string('description');
            $table->string('book_img');
            $table->string('file_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->dropForeign(['author_id']);
        Schema::dropIfExists('livres');
    }
};
