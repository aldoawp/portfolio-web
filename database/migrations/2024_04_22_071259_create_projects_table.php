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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('category');
            $table->integer('members');
            $table->string('company');
            $table->integer('time_completion');
            $table->longText('overview');
            $table->string('scale');
            $table->string('status');
            $table->longText('challenges');
            $table->longText('solutions');
            $table->longText('tech_stack');
            $table->string('performance_metrics')->nullable();
            $table->longText('impacts');
            $table->longText('lesson_learned');
            $table->string('project_thumbnail') -> nullable();
            $table->unsignedBigInteger('testimonial_id')->nullable();
            $table->timestamps();
            $table->foreign('testimonial_id')
                    ->references('id')
                    ->on('testimonials');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
