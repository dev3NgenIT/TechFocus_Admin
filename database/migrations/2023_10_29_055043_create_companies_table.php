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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); //000
            $table->string('slug')->unique();
            $table->json('industry')->nullable(); //000
            $table->json('country')->nullable(); //000
            $table->json('location')->nullable(); //000
            $table->string('phone', 20)->nullable();//000
            $table->string('email')->nullable();//000
            $table->string('website')->nullable();//000
            $table->string('logo')->nullable();//000
            $table->string('postal_code', 10)->nullable();//000
            $table->string('contact_name')->nullable();//000
            $table->string('contact_email')->nullable();//000
            $table->string('contact_phone')->nullable();//000
            $table->unsignedBigInteger('headquarter_country_id')->nullable(); // Headquarter location   000
            $table->string('founder')->nullable(); // Founder's name 000
            $table->integer('year_founded')->nullable(); // Year the industry was founded 000
            $table->string('ceo')->nullable(); // CEO's name 000
            
            $table->text('headquarter')->nullable(); // Headquarter location
            $table->mediumText('mission')->nullable(); // Mission statement
            $table->mediumText('vision')->nullable(); // Vision statement
            $table->mediumText('history')->nullable(); // Historical information
            $table->mediumText('about')->nullable(); // About. information
            $table->timestamps();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
