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
        Schema::create('sales_year_targets', function (Blueprint $table) {
            $table->foreignId('company_id')->nullable()->constrained('companies')->cascadeOnDelete();
            $table->year('fiscal_year')->nullable();
            $table->double('year_target')->nullable();
            $table->double('quarter_one_target')->nullable();
            $table->double('quarter_two_target')->nullable();
            $table->double('quarter_three_target')->nullable();
            $table->double('quarter_four_target')->nullable();
            $table->enum('year_started', ['january', 'july'])->nullable();
            $table->double('january_target')->nullable();
            $table->double('february_target')->nullable();
            $table->double('march_target')->nullable();
            $table->double('april_target')->nullable();
            $table->double('may_target')->nullable();
            $table->double('june_target')->nullable();
            $table->double('july_target')->nullable();
            $table->double('august_target')->nullable();
            $table->double('september_target')->nullable();
            $table->double('october_target')->nullable();
            $table->double('november_target')->nullable();
            $table->double('december_target')->nullable();
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
        Schema::dropIfExists('sales_year_targets');
    }
};
