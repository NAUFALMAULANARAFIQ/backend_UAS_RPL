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
        Schema::create('jobs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('post_id'); 
            $table->tinyInteger('min_experience_years');
            $table->integer('number_of_employee');
            $table->string('duration');
            $table->enum('status', ['open', 'closed'])->default('open');
            $table->enum('type_job', ['full-time', 'part-time', 'contract', 'internship'])->nullable();
            $table->enum('type_salary', ['fixed', 'flexible'])->default('fixed');
            $table->timestamps();

            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
