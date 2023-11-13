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
        Schema::create('hr_policies', function (Blueprint $table) {
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnDelete();
            $table->foreignId('company_id')->nullable()->constrained('companies')->cascadeOnDelete();
            $table->foreignId('dynamic_category_id')->nullable()->constrained('dynamic_categories')->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->date('effective_date')->nullable();
            $table->date('expiration_date')->nullable();
            $table->enum('status', ['active', 'inactive', 'archived'])->default('active');
            $table->string('version')->nullable();
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
        Schema::dropIfExists('hr_policies');
    }
};
