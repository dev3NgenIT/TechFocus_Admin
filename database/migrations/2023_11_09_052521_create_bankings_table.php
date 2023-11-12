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
        Schema::create('bankings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('order_id');
            
            $table->string('month')->nullable();
            $table->date('date')->nullable();
            $table->year('fiscal_year')->nullable();
            $table->string('bank_name')->nullable();
            $table->double('deposit')->nullable();
            $table->double('withdraw')->nullable();
            $table->string('purpose')->nullable();
            $table->string('comments')->nullable();
            $table->string('notes')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('company_id')->references('id')->on('countries')->onDelete('cascade');$table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bankings');
    }
};
