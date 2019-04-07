<div class="modal fade bd-example-modal-lg" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Employee Registration Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="employee-form" id="employee-form" action="POST" enctype="multipart/form-data">
       {{ csrf_field() }}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Employee ID:</label>
            <input type="text" name="employee_id" class="form-control form-control-sm" id="add-employee-id" value="" required>
          </div>
          <div class="row">
            <div class="form-group col-sm-4">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">First Name:</label>
              <input type="text" name="emp_fname" class="form-control form-control-sm" id="recipient-name" value="" required>
            </div>
            <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Middle Name:</label>
              <input type="text" name="emp_mname" class="form-control form-control-sm" id="recipient-name" value="" required>
            </div>
            <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Last Name:</label>
              <input type="text" name="emp_lname" class="form-control form-control-sm" id="recipient-name" value="" required>
            </div>
            <div class="form-group col-sm-2">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Ext:</label>
              <input type="text" name="emp_extension" class="form-control form-control-sm" id="recipient-name" value="" required>
            </div>
          </div>

          <div class="row">

            <div class="form-group col-sm-4">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Date of birth:</label>
              <input type="date" name="emp_date_of_birth" class="form-control form-control-sm" id="recipient-name" value="" required>
            </div>

            <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Marital Status:</label>
              <select name="emp_marital_status" class="form-control form-control-sm">
                <option value="0">Select a marital status</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Separated">Separated</option>
                <option value="Widowed">Widowed</option>
              </select>
            </div>
            
             <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Blood type</label>
              <select name="emp_blood_type" class="form-control form-control-sm">
                <option value="0">Select blood type</option>
                <option value="O+">O+</option>
                <option value="B+">B+</option>
                <option value="AB+">AB+</option>
                <option value="A-">A-</option>
              </select>
            </div>

            <div class="form-group col-sm-2">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Sex:</label>
              <select name="emp_sex" class="form-control form-control-sm">
                <option value="0">Select a sex</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>

          </div>

          <hr>

          <div class="row">
            <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Philhealth #</label>
              <input type="text" name="emp_philhealth_number" class="form-control form-control-sm" id="recipient-name" value="" required>
            </div>
            <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">PAGIBIG #</label>
              <input type="text" name="emp_pagibig_number" class="form-control form-control-sm" id="recipient-name" value="" required>
            </div>
            <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">SSS #</label>
              <input type="text" name="emp_sss_number" class="form-control form-control-sm" id="recipient-name" value="" required>
            </div>
            <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">TIN #</label>
              <input type="text" name="emp_tin_number" class="form-control form-control-sm" id="recipient-name" value="" required>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Date started:</label>
              <input type="date" name="emp_date_started" class="form-control form-control-sm" id="recipient-name" value="" required>
            </div>
            <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Date effectivity:</label>
              <input type="date" name="emp_date_effectivity" class="form-control form-control-sm" id="recipient-name" value="" required>
            </div>
            <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Employment status:</label>
              <select name="emp_employment_status" class="form-control form-control-sm">
                <option value="None">Select employment status</option>
                <option value="Regular">Regular</option>
                <option value="Contractual">Contractual</option>
              </select>
            </div>
            <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Employee status:</label>
              <select name="emp_employee_status" class="form-control form-control-sm">
                <option value="0">Select employee status</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Division:</label>
              <select name="emp_division" required="" class="form-control form-control-sm" id="emp_division">
                <option value="">Select a Division</option>
                @foreach($divisions as $div)
                <option value="{{$div->division_name}}">{{$div->division_name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Particular</label>
              <select name="emp_unit" required="" class="form-control form-control-sm" id="emp_unit">
                <option value="">Select a Particular</option>
                @foreach($particulars as $par)
                <option value="{{$par->particular_name}}">{{ $par->particular_name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-sm-3">
             <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Position:</label>
              <select name="emp_position"  class="form-control form-control-sm" required>
                <option value="">Select a Position</option>
                @foreach($positions as $pos)
                <option value="{{$pos->position_name}}">{{$pos->position_name}}</option>
                @endforeach
              </select>
            </div>
             <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Salary rate</label>
              <input type="number" step="0.01" name="emp_salary_rate" class="form-control form-control-sm" id="recipient-name" value="" required>
            </div>
          </div>

          <hr>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Home address:</label>
            <input type="text" name="emp_home_address" class="form-control form-control-sm" id="recipient-name" value="" required>
          </div>
          <div class="row">
            <div class="form-group col-sm-4">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Email address:</label>
              <input type="text" name="emp_email_address" class="form-control form-control-sm" id="recipient-name" value="" required>
            </div>
            <div class="form-group col-sm-4">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Contact #:</label>
              <input type="text" name="emp_contact_number" class="form-control form-control-sm" id="recipient-name" value="" required>
            </div>
            <div class="form-group col-sm-4">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Photo:</label>
              <input type="text" name="emp_photo_url" class="form-control form-control-sm" id="recipient-name" value="" required>
            </div>
          </div>
          <address></address>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.reload()" >Close</button>
          <input type="submit" class="btn btn-success btn-submit-employee" value="Submit">
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>