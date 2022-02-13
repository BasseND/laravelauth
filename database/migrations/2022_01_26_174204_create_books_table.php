<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('poster')->nullable();
            $table->string('book_pdf')->nullable();
            $table->string('date_publication')->nullable();
            $table->string('page_nbr')->nullable();
            $table->string('slug');
            $table->boolean('is_published')->default(false);
            $table->boolean('is_book_of_month')->default(false);
            $table->foreignId('user_id')->constrained();
            $table->foreignId('authors_id')->constrained();
            // $table->foreignId('themes_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
