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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained('countries')->cascadeOnDelete()->nullable();
            $table->boolean('system_default_currency')->default(false)->index();
            $table->string('symbol_format')->nullable();
            $table->enum('decimal_separator', ['.', ','])->default('.');
            $table->unsignedTinyInteger('no_of_decimals')->default(2);
            $table->string('name');
            $table->string('symbol', 10);
            $table->string('code', 3)->unique()->index();
            $table->decimal('exchange_rate', 16, 6)->default(1.000000);
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
        Schema::dropIfExists('currencies');
    }
};
