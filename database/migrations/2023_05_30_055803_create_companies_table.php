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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('person_name');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('token')->nullable();
            $table->string('logo')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('website')->nullable();
            $table->string('company_size')->nullable();
            $table->string('founded_on')->nullable();
            $table->integer('industry_id')->nullable();
            $table->text('description')->nullable();
            $table->string('on_mon')->nullable();
            $table->string('on_tue')->nullable();
            $table->string('on_wed')->nullable();
            $table->string('on_thu')->nullable();
            $table->string('on_fri')->nullable();
            $table->string('on_sat')->nullable();
            $table->string('on_sun')->nullable();
            $table->text('map_Code')->nullable();
            $table->text('facebook')->nullable();
            $table->text('twitter')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('instagram')->nullable();
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
