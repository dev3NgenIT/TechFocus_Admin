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
        Schema::create('sales_team_targets', function (Blueprint $table) {
            $table->foreignId('sales_man_id')->nullable()->constrained('admins')->cascadeOnDelete();
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnDelete();
            $table->foreignId('company_id')->nullable()->constrained('companies')->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->year('fiscal_year')->nullable();
            $table->double('year_target')->nullable();
            $table->double('quarter_one_target')->nullable();
            $table->double('quarter_two_target')->nullable();
            $table->double('quarter_three_target')->nullable();
            $table->double('quarter_four_target')->nullable();
            $table->enum('year_started', ['january', 'july'])->nullable();
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
        Schema::dropIfExists('sales_team_targets');
    }
};
