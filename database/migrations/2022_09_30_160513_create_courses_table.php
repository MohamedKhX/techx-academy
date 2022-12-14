<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('subTitle');
            $table->string('cover');
            $table->text('description');
            $table->json('what_you_will_learn');
            $table->json('requirements');
            $table->boolean('is_free');

            $table->foreignId('category_id');
            $table->foreignId('instructor_id')->references('id')->on('instructors')->onDelete('cascade');
            $table->foreignId('level_id');

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
        Schema::dropIfExists('courses');
    }
};
