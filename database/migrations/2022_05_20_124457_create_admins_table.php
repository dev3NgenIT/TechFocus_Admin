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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnDelete();
            $table->foreignId('department_id')->nullable()->constrained('employee_departments')->cascadeOnDelete();
            $table->string('name', 255);
            $table->string('username', 30)->unique()->nullable();
            $table->string('email', 255)->unique();
            $table->string('photo', 255)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('designation', 30)->nullable();
            $table->text('address')->nullable();
            $table->string('city', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('postal', 20)->nullable();
            $table->timestamp('last_seen')->nullable();
            $table->enum('role', ['admin', 'manager', 'others'])->default('others');
            $table->string('department', 30)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255);
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
        Schema::dropIfExists('admins');
    }
};
