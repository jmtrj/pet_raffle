<!-- Add -->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title"> Add Banker</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span></button>
            </div>
            <form class="form-horizontal" method="POST" action="players/function.php"  enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                          <div class="col-12">
                            <label for="User_Id" class="col-sm-12 control-label">Firstname</label>
                            <input type="text" class="form-control" name="Firstname"  required  placeholder="Firstname">
                          </div>

                          <div class="col-12">
                            <label for="Login Name" class="col-sm-12 control-label" >Lastname</label>
                            <input type="text" class="form-control" name="Lastname"   required placeholder="Lastname">
                          </div>
                          <div class="col-12">
                            <label for="Email" class="col-sm-12 control-label" >Email</label>
                            <input type="Email" class="form-control" name="Name"  required  placeholder="Email">
                          </div>
                    
                          <div class="col-12">
                            <label for="User_Id" class="col-sm-12 control-label">Status</label>
                           <select class="form-control" name="Status" required>
                            <option value="ACTIVE" selected >Active</option>
                           <option value="INACTIVE">Inactive</option>
                           </select>  
                          </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    <button type="submit" class="btn btn-success btn-flat" name="add"><i class="fa fa-save"></i> Submit</button> 
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Add -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title"> Edit Banker</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span></button>
            </div>
            <form class="form-horizontal" method="POST" action="players/function.php"  enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                         <div class="col-12">
                            <label for="User_Id" class="col-sm-12 control-label">Firstname</label>
                            <input type="text" class="form-control" name="Firstname" id="Firstname"  required  placeholder="Firstname">
                          </div>

                          <div class="col-12">
                            <label for="Login Name" class="col-sm-12 control-label" >Lastname</label>
                            <input type="text" class="form-control" name="Lastname" id="Lastname"   required placeholder="Lastname">
                          </div>
                          <div class="col-12">
                            <label for="Email" class="col-sm-12 control-label" >Email</label>
                            <input type="Email" class="form-control" name="Name" id="Email" required  placeholder="Email">
                          </div>
                    
                          <div class="col-12">
                            <label for="User_Id" class="col-sm-12 control-label">Status</label>
                           <select class="form-control" name="Status" id="Status" required>
                            <option value="ACTIVE" selected >Active</option>
                           <option value="INACTIVE">Inactive</option>
                           </select>  
                          </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-save"></i> Submit</button> 
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Add -->
<div class="modal fade" id="upload">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Import Player</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span></button>
            </div>
            <form class="form-horizontal" method="POST" action="players/function.php"  enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                          <div class="col-12">
                            <label for="User_Id" class="col-sm-12 control-label" >Upload files (.csv Only)</label>
                            <input type="file" class="form-control"  required name="file" id="file" >
                          </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-save"></i> Submit</button> 
                </div>
            </form>
        </div>
    </div>
</div>




