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
        Schema::create('leave_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnDelete();
            $table->foreignId('employee_id')->nullable()->constrained('admins')->cascadeOnDelete();
            $table->foreignId('company_id')->nullable()->constrained('companies')->cascadeOnDelete();

            $table->string('name')->nullable();
            $table->string('type_of_leave')->nullable();
            $table->string('designation')->nullable();
            $table->string('company')->nullable();
            $table->date('leave_start_date')->nullable();
            $table->date('leave_end_date')->nullable();
            $table->unsignedBigInteger('total_days')->default(0);

            $table->string('job_status')->nullable();
            $table->date('reporting_on')->nullable();
            $table->text('leave_explanation')->nullable();
            $table->string('substitute_during_leave')->nullable();
            $table->text('leave_address')->nullable();
            $table->string('is_between_holidays')->nullable();
            $table->string('leave_contact_no')->nullable();
            $table->string('included_open_saturday')->nullable();
            $table->string('substitute_signature')->comment('file')->nullable();
            $table->string('applicant_signature')->comment('file.It will automatically come from employee form.No need to add another image to database,just add the image name.')->nullable();
            $table->string('leave_position')->nullable();

            // *********************************************

            $table->unsignedBigInteger('casual_leave_due_as_on')->default(0);
            $table->unsignedBigInteger('casual_leave_availed')->default(0);
            $table->unsignedBigInteger('casual_balance_due')->default(0);
            $table->unsignedBigInteger('earned_leave_due_as_on')->default(0);
            $table->unsignedBigInteger('earned_leave_availed')->default(0);
            $table->unsignedBigInteger('earned_balance_due')->default(0);
            $table->unsignedBigInteger('medical_leave_due_as_on')->default(0);
            $table->unsignedBigInteger('medical_leave_availed')->default(0);
            $table->unsignedBigInteger('medical_balance_due')->default(0);

            $table->string('checked_by')->nullable()->comment('file')->nullable();
            $table->string('recommended_by')->nullable()->comment('file')->nullable();
            $table->string('reviewed_by')->nullable()->comment('file')->nullable();
            $table->string('approved_by')->nullable()->comment('file')->nullable();

            $table->enum('application_status', ['approved', 'rejected', 'pending'])->nullable();
            
            $table->text('note')->nullable();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
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
        Schema::dropIfExists('leave_applications');
    }
};
