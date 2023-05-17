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
        Schema::create('page_home_items', function (Blueprint $table) {
            $table->id();
            $table->text('heading');
            $table->text('text')->nulladble;
            $table->text('job_title');
            $table->text('job_category');
            $table->text('job_location');
            $table->text('search');
            $table->text('background');
            $table->text('job_category_heading');
            $table->text('job_category_subheading')->nullable();
            $table->text('job_category_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_home_items');
    }
};
