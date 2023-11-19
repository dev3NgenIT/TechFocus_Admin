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
        Schema::create('industries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('industry_id');
            $table->unsignedBigInteger('row_one_id');
            $table->unsignedBigInteger('row_three_id');
            $table->unsignedBigInteger('row_five_id');
            $table->unsignedBigInteger('solution_one_id')->nullable();
            $table->unsignedBigInteger('solution_two_id')->nullable();
            $table->unsignedBigInteger('solution_three_id')->nullable();
            $table->unsignedBigInteger('solution_four_id')->nullable();
            $table->unsignedBigInteger('client_story_id');
            $table->text('header')->nullable();
            $table->string('btn_one_name')->nullable();
            $table->string('btn_one_link')->nullable();
            $table->string('row_four_title')->nullable();
            $table->text('row_four_header')->nullable();
            $table->string('row_four_col_one_title')->nullable();
            $table->text('row_four_col_one_header')->nullable();
            $table->string('row_four_col_two_title')->nullable();
            $table->text('row_four_col_two_header')->nullable();
            $table->string('footer_title')->nullable();
            $table->text('footer_header')->nullable();
            $table->foreign('industry_id')->references('id')->on('industries')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('row_one_id')->references('id')->on('rows')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('row_three_id')->references('id')->on('rows')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('row_five_id')->references('id')->on('rows')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('solution_one_id')->references('id')->on('solution_details')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('solution_two_id')->references('id')->on('solution_details')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('solution_three_id')->references('id')->on('solution_details')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('solution_four_id')->references('id')->on('solution_details')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('client_story_id')->references('id')->on('client_stories')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('industries');
    }
};
