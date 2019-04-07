
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addEmployeeModal" data-whatever="@mdo">Add Employee</button>
<button type="button" class="btn btn-primary edit-employee" data-toggle="modal" data-target="" data-whatever="@fat">Edit Employee</button>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Deactivate Employment</button>
          
  <div id="ui-view" style="margin-top: 10px">
    <div><link href="{{ url('assets/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
      <div class="animated fadeIn">
        <div class="card border-success">
        <div class="card-header"><i class="fa fa-edit"></i> Employee List</div>
          <div class="card-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
              <div class="col-sm-12 col-md-6"></div>
              </div>
            <div class="row">
            <div class="col-sm-12">
            <div class="animated fadeIn" style="overflow-x: scroll;margin-top: 10px">
            <table class="table table-striped table-bordered datatable dataTable no-footer table-employees-content" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                <thead>
                <tr role="row">
                  <th >#</th>
                  <th style="display: none;">ID</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Employee ID: activate to sort column descending" style="width: 144px;">Employee ID</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DFirst Name: activate to sort column ascending" style="width: 121px;">First Name</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Middle name: activate to sort column ascending" style="width: 45px;">Middle Name</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last name: activate to sort column ascending" style="width: 45px;">Last Name</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Ext: activate to sort column ascending" style="width: 45px;">Ext</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date of Birth: activate to sort column ascending" style="width: 45px;">Date of Birth</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Marital Status: activate to sort column ascending" style="width: 45px;">Marital Status</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Sex: activate to sort column ascending" style="width: 45px;">Sex</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Blood type: activate to sort column ascending" style="width: 45px;">Blood Type</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Philhealth #: activate to sort column ascending" style="width: 45px;">Philhealth #</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="PAGIBIG #: activate to sort column ascending" style="width: 45px;">PAGIBIG #</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="SSS #: activate to sort column ascending" style="width: 45px;">SSS #</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="TIN #: activate to sort column ascending" style="width: 45px;">TIN #</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date started: activate to sort column ascending" style="width: 45px;">Date started</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date effctvity: activate to sort column ascending" style="width: 45px;">Date effctvity</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Employment status: activate to sort column ascending" style="width: 45px;">Employment status</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Employee status: activate to sort column ascending" style="width: 45px;">Employee status</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Division: activate to sort column ascending" style="width: 45px;">Division</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Particular: activate to sort column ascending" style="width: 45px;">Particular</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position ID: activate to sort column ascending" style="width: 45px;">Position</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary Rate: activate to sort column ascending" style="width: 45px;">Salary Rate</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Home Address: activate to sort column ascending" style="width: 45px;">Home Address</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 45px;">Email Address</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Contact #: activate to sort column ascending" style="width: 45px;">Contact #</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending" style="width: 45px;">Photo</th>
                  
                </tr>
              </thead>
              <tbody>
               @foreach ($employees as $employee)
                <tr class="tbl-employees-row">  
                    <td><input type='checkbox' style='width:30px; height:20px;' class='employee-id-checkbox' id='employee-id-checkbox' value="{{ $employee->id }}"></td>
                    <td style="display: none;">{{ $employee->id }}</td>
                    <td>{{ $employee->employee_id }}</td>
                    <td>{{ $employee->emp_fname }}</td>
                    <td>{{ $employee->emp_mname }}</td>
                    <td>{{ $employee->emp_lname }}</td>
                    <td>{{ $employee->emp_extension }}</td>
                    <td>{{ $employee->emp_date_of_birth }}</td>
                    <td>{{ $employee->emp_marital_status }}</td>
                    <td>{{ $employee->emp_sex }}</td>
                    <td>{{ $employee->emp_blood_type }}</td>
                    <td>{{ $employee->emp_philhealth_number }}</td>
                    <td>{{ $employee->emp_pagibig_number }}</td>
                    <td>{{ $employee->emp_sss_number }}</td>
                    <td>{{ $employee->emp_tin_number }}</td>
                    <td>{{ $employee->emp_date_started }}</td>
                    <td>{{ $employee->emp_date_effectivity }}</td>
                    <td>{{ $employee->emp_employment_status }}</td>
                    <td>{{ $employee->emp_employee_status == "0" ? "Inactive":"Active" }}</td>
                    <td>{{ $employee->emp_division }}</td>
                    <td>{{ $employee->emp_unit }}</td>
                    <td>{{ $employee->emp_position }}</td>
                    <td>{{ $employee->emp_salary_rate }}</td>
                    <td>{{ $employee->emp_home_address }}</td>
                    <td>{{ $employee->emp_email_address }}</td>
                    <td>{{ $employee->emp_contact_number }}</td>
                    <td>{{ $employee->emp_photo_url }}</td>
                </tr>
              @endforeach 
              </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

