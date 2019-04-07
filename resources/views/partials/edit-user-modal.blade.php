<div class="modal fade bd-example-modal-lg" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-primary" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Modification Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form class="update-user-form" id="update-user-form" method="POST" >

         {{ csrf_field() }}

         <input type="hidden" name="id" class="form-control" id="primary_id" value="">

            <div class="form-group">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">User ID:</label>
              <input type="text" name="user_id" class="form-control form-control-sm" id="user_id" value="" required>
            </div>
            <div class="row">
              <div class="form-group col-sm-4">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Username:</label>
                <input type="text" name="username" class="form-control form-control-sm" id="editUsername" value="" required>
              </div>
              <div class="form-group col-sm-3">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Email Address:</label>
                <input type="text" name="email" class="form-control form-control-sm" id="editEmail" value="" required>
              </div>
              <div class="form-group col-sm-3">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Role:</label>
                <input type="text" name="role_id" class="form-control form-control-sm" id="editRole_id" value="" required>
              </div>
              <div class="form-group col-sm-2">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Photo:</label>
                <input type="text" name="photo_url" class="form-control form-control-sm" id="editPhoto_url" value="" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.reload()" >Close</button>
              <input type="submit" class="btn btn-primary btn-update-user" value="Save Updates"/>
            </div>
          </form>
        </div>          
      </div>
    </div>
 </div>
  
