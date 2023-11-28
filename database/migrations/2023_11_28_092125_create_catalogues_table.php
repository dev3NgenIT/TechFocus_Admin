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
        Schema::create('catalogues', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->json('brand_id')->nullable()->comment('multi_id');
            $table->json('product_id')->nullable()->comment('multi_id');
            $table->json('industry_id')->nullable()->comment('multi_id');
            $table->json('solution_id')->nullable()->comment('multi_id');
            $table->json('company_id')->nullable()->comment('multi_id');

            $table->string('name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('page_number', 20)->nullable();
            $table->text('description')->nullable();

            $table->string('button_name')->nullable();
            $table->string('button_link')->nullable();

            $table->string('document')->nullable()->comment('file:pdf');
            $table->string('page_image')->nullable()->comment('image');
            $table->text('page_description')->nullable();
            $table->string('page_link')->nullable();
            $table->string('button_name')->nullable();
            $table->string('button_link')->nullable();
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
        Schema::dropIfExists('catalogues');
    }
};
