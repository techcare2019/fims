
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addUserModal" data-whatever="@mdo">Add User</button>
<button type="button" class="btn btn-primary edit-user" data-toggle="modal" data-target="" data-whatever="@fat">Edit User</button>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Deactivate User</button>
          
  <div id="ui-view" style="margin-top: 10px">
    <div><link href="{{ url('assets/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
      <div class="animated fadeIn">
        <div class="card border-success">
        <div class="card-header"><i class="fa fa-edit"></i> User List</div>
          <div class="card-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                  <div class="col-sm-12">
                      <div class="animated fadeIn" style="overflow-x: scroll;margin-top: 10px">
                        <table class="table table-striped table-bordered datatable dataTable no-footer table-users-content" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                            <thead>
                            <tr role="row">
                              <th style="width:5px">#</th>
                              <th style="display: none;width:5px">ID</th>
                              <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Employee ID: activate to sort column descending" style="width: 5px;">User ID</th>
                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 121px;">User Name</th>
                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="E-mail Address: activate to sort column ascending" style="width: 45px;">Email Address</th>
                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 40px;">Role</th>
                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Created At: activate to sort column ascending" style="width: 120px;">Created At</th>
                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Updated At: activate to sort column ascending" style="width: 120px;">Updated At</th>
                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending" style="width: 45px;">Photo</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                           @foreach ($users as $user)
                            <tr class="tbl-users-row">  
                                <td><input type='checkbox' style='width:30px; height:20px;' class='user-id-checkbox' id='user-id-checkbox' value="{{ $user->id }}"></td>
                                <td style="display: none;">{{ $user->id }}</td>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role_id }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                                <td>{{ $user->avatar }}</td>
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

