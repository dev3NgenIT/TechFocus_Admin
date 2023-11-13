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
        Schema::create('events', function (Blueprint $table) {
            $table->foreignId('dynamic_category_id')->nullable()->constrained('dynamic_categories')->cascadeOnDelete();
            $table->foreignId('employee_id')->nullable()->constrained('admins')->cascadeOnDelete();  // Assuming there's an employees table
            $table->foreignId('department_id')->nullable()->constrained('employee_departments')->cascadeOnDelete();  // Assuming there's a departments table
            $table->string('title');
            $table->string('slug')->unique();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('events');
    }
};
