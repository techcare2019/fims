<div class="modal fade bd-example-modal-lg" id="editEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-primary" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Employee Modification Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="update-employee-form" id="update-employee-form" enctype="multipart/form-data">
       {{ csrf_field() }}
       <input type="hidden" name="id" class="form-control" id="primary_id" value="">
          <div class="form-group">
            <label for="editEmp_id" class="col-form-label" style="font-weight: 500;">Employee ID:</label>
            <input type="text" name="employee_id" class="form-control form-control-sm" id="editEmp_id" value="" required>
          </div>
          <div class="row">
            <div class="form-group col-sm-4">
              <label for="editEmp_fname" class="col-form-label" style="font-weight: 500;">First Name:</label>
              <input type="text" name="emp_fname" class="form-control form-control-sm" id="editEmp_fname" value="" required>
            </div>
            <div class="form-group col-sm-3">
              <label for="editEmp_mname" class="col-form-label" style="font-weight: 500;">Middle Name:</label>
              <input type="text" name="emp_mname" class="form-control form-control-sm" id="editEmp_mname" value="" required>
            </div>
            <div class="form-group col-sm-3">
              <label for="editEmp_lname" class="col-form-label" style="font-weight: 500;">Last Name:</label>
              <input type="text" name="emp_lname" class="form-control form-control-sm" id="editEmp_lname" value="" required>
            </div>
            <div class="form-group col-sm-2">
              <label for="editEmp_extnsion" class="col-form-label" style="font-weight: 500;">Ext:</label>
              <input type="text" name="emp_extension" class="form-control form-control-sm" id="editEmp_extnsion" value="" required>
            </div>
          </div>
          <div class="row">

            <div class="form-group col-sm-4">
              <label for="editEmp_dateofbirth" class="col-form-label" style="font-weight: 500;">Date of birth:</label>
              <input type="date" name="emp_date_of_birth" class="form-control form-control-sm" id="editEmp_dateofbirth" value="" required>
            </div>

            <div class="form-group col-sm-3">
              <label for="editEmp_maritalstatus" class="col-form-label" style="font-weight: 500;">Marital Status:</label>
              <select name="emp_marital_status" class="form-control form-control-sm" id="editEmp_maritalstatus">
                <option value="0">Select a marital status</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Separated">Separated</option>
                <option value="Widowed">Widowed</option>
              </select>
            </div>

             <div class="form-group col-sm-3">
              <label for="editEmp_bloodtype" class="col-form-label" style="font-weight: 500;">Blood type</label>
              <select name="emp_blood_type" class="form-control form-control-sm" id="editEmp_bloodtype">
                <option value="0">Select blood type</option>
                <option value="O+">O+</option>
                <option value="B+">B+</option>
                <option value="AB+">AB+</option>
                <option value="A-">A-</option>
              </select>
            </div>

            <div class="form-group col-sm-2">
              <label for="editEmp_sex" class="col-form-label" style="font-weight: 500;">Sex:</label>
              <select name="emp_sex" class="form-control form-control-sm" id="editEmp_sex">
                <option value="0">Select a sex</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>

          </div>

          <hr>

          <div class="row">

            <div class="form-group col-sm-3">
              <label for="editEmp_philhealth" class="col-form-label" style="font-weight: 500;">Philhealth #</label>
              <input type="text" name="emp_philhealth_number" class="form-control form-control-sm" id="editEmp_philhealth" value="" required>
            </div>

            <div class="form-group col-sm-3">
              <label for="editEmp_pagibig" class="col-form-label" style="font-weight: 500;">PAGIBIG #</label>
              <input type="text" name="emp_pagibig_number" class="form-control form-control-sm" id="editEmp_pagibig" value="" required>
            </div>

            <div class="form-group col-sm-3">
              <label for="editEmp_sss" class="col-form-label" style="font-weight: 500;">SSS #</label>
              <input type="text" name="emp_sss_number" class="form-control form-control-sm" id="editEmp_sss" value="" required>
            </div>

            <div class="form-group col-sm-3">
              <label for="editEmp_tin" class="col-form-label" style="font-weight: 500;">TIN #</label>
              <input type="text" name="emp_tin_number" class="form-control form-control-sm" id="editEmp_tin" value="" required>
            </div>

          </div>

          <div class="row">

            <div class="form-group col-sm-3">
              <label for="editEmp_datestarted" class="col-form-label" style="font-weight: 500;">Date started:</label>
              <input type="date" name="emp_date_started" class="form-control form-control-sm" id="editEmp_datestarted" value="" required>
            </div>

            <div class="form-group col-sm-3">
              <label for="editEmp_dateofeffectivity" class="col-form-label" style="font-weight: 500;">Date effectivity:</label>
              <input type="date" name="emp_date_effectivity" class="form-control form-control-sm" id="editEmp_dateofeffectivity" value="" required>
            </div>

            <div class="form-group col-sm-3">
              <label for="editEmp_employmentstatus" class="col-form-label" style="font-weight: 500;">Employment status:</label>
              <select name="emp_employment_status" class="form-control form-control-sm" id="editEmp_employmentstatus">
                <option value="None">Select employment status</option>
                <option value="Regular">Regular</option>
                <option value="Contractual">Contractual</option>
              </select>
            </div>

            <div class="form-group col-sm-3">
              <label for="editEmp_employeestatus" class="col-form-label" style="font-weight: 500;">Employee status:</label>
              <select name="emp_employee_status" class="form-control form-control-sm" id="editEmp_employeestatus">
                <option value="None">Select employee status</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
              </select>
            </div>

          </div>

          <div class="row">
             <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Division:</label>
              <select name="emp_division" required="" class="form-control form-control-sm" id="editEmp_division" required>
                <option value="">Select a Division</option>
                @foreach($divisions as $div)
                <option value="{{$div->division_name}}">{{$div->division_name}}</option>
                @endforeach
              </select>
            </div>
             <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Particular</label>
              <select name="emp_unit" required="" class="form-control form-control-sm" id="editEmp_unit">
                <option value="">Select a Particular</option>
                @foreach($particulars as $par)
                <option value="{{$par->particular_name}}">{{ $par->particular_name }}</option>
                @endforeach
              </select>
            </div>
             <div class="form-group col-sm-3">
             <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Position:</label>
              <select name="emp_position"  class="form-control form-control-sm" id="editEmp_posid" value="" required>
                <option value="">Select a Position</option>
                @foreach($positions as $pos)
                <option value="{{$pos->position_name}}">{{$pos->position_name}}</option>
                @endforeach
              </select>
            </div>

             <div class="form-group col-sm-3">
              <label for="editEmp_salary" class="col-form-label" style="font-weight: 500;">Salary rate</label>
              <input type="number" step="0.01" name="emp_salary_rate" class="form-control form-control-sm" id="editEmp_salary" value="" required>
            </div>

          </div>

          <hr>

          <div class="form-group">
            <label for="editEmp_homeaddress" class="col-form-label" style="font-weight: 500;">Home address:</label>
            <input type="text" name="emp_home_address" class="form-control form-control-sm" id="editEmp_homeaddress" value="" required>
          </div>
          <div class="row">
            <div class="form-group col-sm-5">
              <label for="editEmp_email" class="col-form-label" style="font-weight: 500;">Email address:</label>
              <input type="text" name="emp_email_address" class="form-control form-control-sm" id="editEmp_email" value="" required>
            </div>
            <div class="form-group col-sm-4">
              <label for="editEmp_contact" class="col-form-label" style="font-weight: 500;">Contact #:</label>
              <input type="text" name="emp_contact_number" class="form-control form-control-sm" id="editEmp_contact" value="" required>
            </div>
            <div class="form-group col-sm-3">
              <label for="editEmp_photo" class="col-form-label" style="font-weight: 500;">Photo:</label>
              <input type="text" name="emp_photo_url" class="form-control form-control-sm" id="editEmp_photo" value="" required>
            </div>
          </div>

          <address></address>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.reload()" >Close</button>
            <input type="submit" class="btn btn-primary btn-update-employee" value="Save Updates">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>