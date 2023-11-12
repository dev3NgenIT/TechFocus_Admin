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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('code')->unique()->nullable();
            $table->text('about')->nullable();
            $table->string('photo')->nullable();
            $table->string('support_tier')->nullable();
            $table->text('support_tier_description')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('postal')->nullable();
            $table->string('last_seen')->nullable();
            $table->string('company_name')->nullable();
            $table->enum('status', ['active', 'inactive', 'suspended', 'disabled'])->default('inactive');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('client_type', ['online', 'corporate'])->nullable();
            $table->enum('type', ['client', 'partner'])->nullable();
            $table->string('company_phone_number')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_url')->nullable();
            $table->date('company_established_date')->nullable();
            $table->text('company_address')->nullable();
            $table->string('vat_number')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('trade_license_number')->nullable();
            $table->string('tin_number')->nullable();
            $table->string('tin')->nullable()->comment('pdf');
            $table->string('bin_certificate')->nullable()->comment('pdf');
            $table->string('trade_license')->nullable()->comment('pdf');
            $table->string('audit_paper')->nullable()->comment('pdf');
            $table->string('industry_id_percentage')->nullable()->comment('multi_id');
            $table->string('product')->nullable()->comment('multi_id');
            $table->string('solution')->nullable()->comment('multi_id');
            $table->string('working_country')->nullable()->comment('multi_id');
            $table->string('yearly_revenue')->nullable()->comment('dropdown-select');
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_email')->nullable();
            $table->string('contact_person_phone')->nullable();
            $table->string('contact_person_address')->nullable();
            $table->string('contact_person_designation')->nullable();
            $table->string('tier')->nullable();
            $table->string('comments')->nullable();
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnDelete();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
