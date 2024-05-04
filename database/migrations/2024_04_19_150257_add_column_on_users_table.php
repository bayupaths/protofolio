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
        Schema::table('users', function (Blueprint $table) {

            // Foreign key for education
            $table->unsignedBigInteger('education_id')->nullable();
            $table->foreign('education_id')->references('id')->on('educations')->onDelete('cascade');

            // Foreign key for experience
            $table->unsignedBigInteger('experience_id')->nullable();
            $table->foreign('experience_id')->references('id')->on('experiences')->onDelete('cascade');

            // Foreign key for skill
            $table->unsignedBigInteger('skill_id')->nullable();
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');

            // Foreign key for certification
            $table->unsignedBigInteger('certification_id')->nullable();
            $table->foreign('certification_id')->references('id')->on('certifications')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropForeign(['education_id']);
            $table->dropColumn('education_id');

            $table->dropForeign(['experience_id']);
            $table->dropColumn('experience_id');

            $table->dropForeign(['skill_id']);
            $table->dropColumn('skill_id');

            $table->dropForeign(['certification_id']);
            $table->dropColumn('certification_id');
        });
    }
};
