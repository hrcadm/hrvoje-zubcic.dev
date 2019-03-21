<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('testimonial_order')->default(null);
            $table->string('testimonial_author_name');
            $table->string('testimonial_author_role');
            $table->string('testimonial_author_company')->nullable()->default(null);
            $table->string('testimonial_note')->nullable()->default(null);
            $table->text('testimonial_content');
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
        Schema::dropIfExists('testimonials');
    }
}
