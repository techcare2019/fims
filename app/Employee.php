<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = ['employee_id','emp_fname','emp_mname','emp_lname','emp_extension','emp_date_of_birth','emp_marital_status','emp_sex','emp_home_address','emp_email_address','emp_contact_number','emp_photo_url','emp_employment_status','emp_employee_status','emp_blood_type','emp_philhealth_number','emp_pagibig_number','emp_sss_number','emp_tin_number','emp_date_started','emp_date_effectivity','emp_division','emp_unit','emp_position','emp_salary_rate'];
}
