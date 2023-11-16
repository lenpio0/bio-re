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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('mail');
            $table->string('tel');
            $table->string('tiktok');
            $table->string('adress1')->nullable();
            $table->string('adress2')->nullable();
            $table->string('insta');
            $table->string('fb');
            $table->text('resonance');
            $table->text('massage');
            $table->string('pp')->nullable();
        });   
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
