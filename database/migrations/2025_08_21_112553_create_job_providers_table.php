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
       Schema::create('job_providers', function (Blueprint $table) {
    $table->unsignedBigInteger('user_id')->unique();
    $table->string('phone_number',15);
    $table->string('highest_qualification');
    $table->date('date_of_birth');
    $table->string('proof_of_dob'); 
    $table->text('skills');
    $table->text('soft_skills');
    $table->text('profile_summary');
    $table->integer('total_experience_years');
    $table->integer('total_gap_in_employment')->nullable();
    $table->string('work_skill_photos')->nullable(); 
    $table->text('address');
    $table->enum('work_preference', ['work_from_home', 'on_site']);

    // Organization specifications
    $table->string('organization_name')->nullable();
    $table->string('proof_of_authorized_organization')->nullable(); 
    $table->text('skills_of_interest')->nullable();

    $table->timestamps();

    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_providers');
    }
};
