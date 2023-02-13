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
        Schema::create('landing_feed_backs', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->foreignId('class_id')->constrained('landing_feed_back_classes');
            $table->foreignId('subject_id')->constrained('landing_feed_back_subjects');
            $table->foreignId('target_id')->constrained('landing_feed_back_targets');
            
            $table->string('contacts');

            $table->foreignId('format_id')->constrained('landing_feed_back_formats');
            $table->foreignId('status_id')->constrained('landing_feed_back_statuses')->default('1');

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
        Schema::dropIfExists('landing_feed_backs');
    }
};
