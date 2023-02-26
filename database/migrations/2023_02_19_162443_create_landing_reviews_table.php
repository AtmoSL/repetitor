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
        Schema::create('landing_reviews', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('class');
            $table->string('photo_path');

            $table->text('text');

            $table->boolean('is_published')->default(0);

            $table->foreignId('subject_id')->constrained('landing_feed_back_subjects');
            $table->timestamps();
            
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landing_reviews');
    }
};
