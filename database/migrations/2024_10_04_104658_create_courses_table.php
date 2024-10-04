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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->text('course_title');
            $table->text('course_name')->nullable();
            $table->string('course_name_slug')->nullable();
            $table->string('course_image')->nullable();

            $table->longText('description')->nullable();
            $table->string('video')->nullable();
            $table->string('label')->nullable();
            $table->string('duration')->nullable();
            $table->string('resources')->nullable();
            $table->string('certification')->nullable();

            $table->unsignedFloat('selling_price')->nullable();
            $table->integer('discount_price')->nullable();
            $table->text('prerequisites')->nullable();
            $table->string('bestseller')->nullable();
            $table->string('featured')->nullable();
            $table->string('highest_rated')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->foreignId('category_Id')->constrained('categories');
            $table->foreignId('subcategory_id')->constrained('sub_categories');
            $table->foreignId('instructor_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
