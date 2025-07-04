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
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('posted_by');
            $table->string('title', 150);
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->json('required_skills'); // Array: ["Laravel", "React"]
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('posted_by')->references('id')->on('users')->onDelete('cascade');
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
