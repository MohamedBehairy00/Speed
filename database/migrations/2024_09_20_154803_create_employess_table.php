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
        Schema::create('employess', function (Blueprint $table) {
            $table->id();
            $table->string("Name", 255)->notNullable();
            $table->string("Email", 255)->notNullable();
            $table->string("Phone", 16)->notNullable();
            $table->text("Address")->nullable();
            $table->string('cv')->nullable();
            $table->string('jobName')->notNullable();
            $table->text("Comments")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employess');
    }
};
