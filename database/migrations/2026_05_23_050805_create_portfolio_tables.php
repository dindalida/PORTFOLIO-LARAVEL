<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('category')->default('web');
            $table->json('tech_stack')->nullable();
            $table->string('image')->nullable();
            $table->string('demo_url')->nullable();
            $table->string('github_url')->nullable();
            $table->boolean('featured')->default(false);
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->timestamps();
        });

        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->string('company');
            $table->string('employment_type')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->boolean('is_current')->default(false);
            $table->json('tasks')->nullable();
            $table->json('tech_used')->nullable();
            $table->timestamps();
        });

        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->string('degree');
            $table->string('major')->nullable();
            $table->string('institution');
            $table->year('start_year');
            $table->year('end_year')->nullable();
            $table->decimal('gpa', 3, 2)->nullable();
            $table->json('achievements')->nullable();
            $table->timestamps();
        });

        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('issuer');
            $table->date('date');
            $table->string('credential_url')->nullable();
            $table->string('icon')->nullable()->default('fas fa-certificate');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('certifications');
        Schema::dropIfExists('educations');
        Schema::dropIfExists('experiences');
        Schema::dropIfExists('projects');
    }
};