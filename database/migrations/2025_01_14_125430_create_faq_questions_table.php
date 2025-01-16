<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('faq_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('question');
            $table->text('answer');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('faq_categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('faq_questions');
    }
}
