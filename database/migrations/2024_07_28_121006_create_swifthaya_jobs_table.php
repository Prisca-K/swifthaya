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
    Schema::create('swifthaya_jobs', function (Blueprint $table) {
      $table->id();
      $table->foreignId('company_id')->constrained('users')->cascadeOnDelete();
      $table->string('title');
      $table->text('description');
      $table->json('required_skills')->nullable();
      $table->string('location')->nullable();
      $table->string('salary_range')->nullable();
      $table->enum('job_type', ['Full-time', 'Part-time', 'Contract']);
      $table->timestamps();
      $table->timestamp('posted_at')->nullable();
      $table->timestamp('deadline_date')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('swifthaya_jobs');
  }
};
