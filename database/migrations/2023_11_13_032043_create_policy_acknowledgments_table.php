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
        Schema::create('policy_acknowledgments', function (Blueprint $table) {
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnDelete();
            $table->foreignId('employee_id')->nullable()->constrained('admins')->cascadeOnDelete();
            $table->foreignId('policy_id')->nullable()->constrained('hr_policies')->cascadeOnDelete();
            $table->string('sign')->nullable()->comment('file.It will automatically come from employee form.No need to add another image to database,just add the image name.');
            $table->enum('status', ['acknowledged', 'pending'])->default('pending');
            $table->timestamp('acknowledged_at')->nullable();
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
        Schema::dropIfExists('policy_acknowledgments');
    }
};
