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
      // blog -> blog_section
      //blog_section => blogs
      // one to many
      // blog requereid forign key
      // id,name,desc,img,blog_section_id
      // DB
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('img')->nullable();
             $table->unsignedBigInteger('blog_section_id');
            $table->foreign('blog_section_id')->references('id')->on('blog_sections')->cascadeOnDelete();
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
