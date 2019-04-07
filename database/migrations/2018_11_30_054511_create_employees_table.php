<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id');
            $table->string('emp_fname');
            $table->string('emp_mname');
            $table->string('emp_lname');
            $table->string('emp_extension');
            $table->date('emp_date_of_birth');
            $table->string('emp_marital_status');
            $table->string('emp_sex');
            $table->string('emp_blood_type');
            $table->string('emp_philhealth_number');
            $table->string('emp_pagibig_number');
            $table->string('emp_sss_number');
            $table->string('emp_tin_number');
            $table->date('emp_date_started');
            $table->date('emp_date_effectivity');
            $table->string('emp_employment_status');
            $table->boolean('emp_employee_status');
            $table->string('emp_division');
            $table->string('emp_unit');
            $table->string('emp_position');
            $table->float('emp_salary_rate');
            $table->string('emp_home_address');
            $table->string('emp_email_address');
            $table->string('emp_contact_number');
            $table->string('emp_photo_url');
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
        Schema::dropIfExists('employees');
    }
}
