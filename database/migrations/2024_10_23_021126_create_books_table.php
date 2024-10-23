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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->year('year');
            $table->string('publisher');
            $table->string('city');
            $table->string('cover');
            $table->unsignedInteger('bookshelf_id');
            $table->timestamps();

           
        });
        
        Schema::create('books', function (Blueprint $table){
            $table->foreign('bookself_id')->references('id')->on('bookshelfs');  
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('books', function (Blueprint $table){
            $table->dropConstrainedForeignId('bookself_id'); 
        });
        
        Schema::dropIfExists('books');
    }
   
};
