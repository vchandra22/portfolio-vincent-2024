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
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->index();
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('gambar')->nullable();
            $table->mediumText('meta_title')->nullable();
            $table->mediumText('meta_description')->nullable();
            $table->mediumText('meta_keyword')->nullable();
            $table->string('og_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
