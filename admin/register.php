<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

          <div class="form-group">
              <label> Username </label>
              <input type="text" name="username" class="form-control" placeholder="Enter Username">
          </div>
          <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" placeholder="Enter Email">
          </div>
          <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" placeholder="Enter Password">
          </div>
          <div class="form-group">
              <label>Confirm Password</label>
              <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
          </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">User Profile 
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
          Add user Profile details
        </button>
    </h6>
  </div>
  <?php include('display_data/6_display.php');?>
  
</div>

</div>
<!-- /.container-fluid -->

<?php
//include('sellgraph.php');
include('admin_graph.php');
include('includes/footer.php');
?>