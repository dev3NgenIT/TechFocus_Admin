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
        Schema::create('f_a_q_s', function (Blueprint $table) {
            $table->foreignId('company_id')->nullable()->constrained('companies')->cascadeOnDelete();
            $table->foreignId('dynamic_category_id')->nullable()->constrained('dynamic_categories')->cascadeOnDelete();
            $table->string('question');
            $table->text('answer');
            $table->integer('order')->unsigned()->nullable();
            $table->enum('is_published', ['0', '1'])->default(0);
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
        Schema::dropIfExists('f_a_q_s');
    }
};
