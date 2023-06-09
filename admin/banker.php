<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
 <?php include 'includes/menubar.php'; ?>
<?php include 'includes/navbar.php'; ?>
  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Player List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <?php include '../validation.php'; ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
        

            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> 
                  <a href="#upload" data-toggle="modal" class="btn btn-success btn-sm btn-flat"><i class="fa fa-upload"></i> Import Banker</a> 
                  <a href="#add" data-toggle="modal" class="btn btn-secondary btn-sm btn-flat"><i class="fa fa-user-plus"></i> Add Banker</a>
                 

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Created_On</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<script>
 $(document).ready(function() {
      $('#example').DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
          $(nRow).attr('id', aData[0]);
        },
        'serverSide': 'true',
        'processing': 'true', 
        'paging': 'true',
        'order': [],
        'ajax': {
          'url': 'bankers/data.php',
          'type': 'post',
        },
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [5]
          },

        ]
      });
    });


$(function(){

$(document).on('click','.edit', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    $('#edit').modal('show');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'bankers/row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
     $('#Id').val(response.Id);
     $('#User_Id').val(response.User_Id);
     $('#Loginname').val(response.Loginname);
     $('#Name').val(response.Name);
     $('#Contactnumber').val(response.Contactnumber);
     $('#Status').val(response.Status);    
      $('#type_val').val(response.Hub).html(response.Hub);

    }
  });
}


</script>
 <?php include 'bankers/modal/modal.php'; ?>
 <?php include 'includes/script.php'; ?>