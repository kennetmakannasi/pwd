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
       Schema::create("book", function (Blueprint $table) {
        $table->id();
        $table->string("judul");
        $table->string("kategori");
        $table->string("sampul");
        $table->string("file");
        $table->string("penulis");
        $table->string("previewbg");
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('book');
    }
};
