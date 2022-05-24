<?php
include('includes/checklogin.php');
// include('includes/style.css');
//check_login();
if(isset($_POST['save']))
{

  $seater=$_POST['seater'];
  $number=$_POST['number'];
  $fee=$_POST['fee'];
  $sql="insert into rooms(seater,room_no,fees)values(:seater,:number,:fee)";
  $query=$dbh->prepare($sql);
  $query->bindParam(':seater',$seater,PDO::PARAM_STR);
  $query->bindParam(':number',$number,PDO::PARAM_STR);
  $query->bindParam(':fee',$fee,PDO::PARAM_STR);
  $query->execute();
  $LastInsertId=$dbh->lastInsertId();
  if ($LastInsertId>0) 
  {
    echo '<script>alert("Registered successfully")</script>';
    echo "<script>window.location.href ='thankyou.html'</script>";
  }
  else
  {
    echo '<script>alert("Something Went Wrong. Please try again")</script>';
  }
}
if(isset($_GET['del']))
{
  $id=intval($_GET['del']);
  $sql="delete from rooms where id=:rid";
  $query2= $dbh->prepare($sql);
  $query2->bindParam(':rid',$id,PDO::PARAM_STR);
  $query2->execute();
  if($query2->execute()) {
    echo "<script>alert('Room Deleted');</script>" ;
    echo "<script>window.location.href ='thankyou.html'</script>";
  }else{
    echo "<script>alert('Failed try again later.');</script>" ;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="style.css">
<title>CLICKDOTPG</title>
 <?php @include("includes/head.php")?>
  

<body>
  
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
   <!-- php @include("includes/header.php") -->
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <!-- php @include("includes/sidebar.php");?> -->
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
               <div class="modal-header">
                <h5 class="modal-title" style="float: left;">Room register</h5>
              </div>
              <div class="col-md-12 mt-4">
                <form class="forms-sample" method="post" enctype="multipart/form-data" class="form-horizontal">
                  <div class="row ">
                    <div class="form-group col-md-12">
                      <label for="exampleInputName1">Select Seater</label>
                      <Select name="seater" class="form-control" required>
                        <option value="">Select Seater</option>
                        <option value="1">Single Seater</option>
                        <option value="2">Two Seater</option>
                        <option value="3">Three Seater</option>
                        <option value="4">Four Seater</option>
                        <option value="5">Five Seater</option>
                        <option value="5">Deluxe Seater</option>

                      </Select>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="form-group col-md-6">
                      <label for="exampleInputName1">Room No.</label>
                      <input type="text" name="number" value="" class="form-control" id="number"required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputName1">Fee(Per Student)</label>
                      <input type="text" name="fee" value="" class="form-control" id="fee"required>
                    </div>
                  </div>
                  <button type="submit"  style="float: left;" name="save" class="btn btn-primary mr-2 mb-4">Add Room</button>
									
                  
                </form>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-12 grid-margin stretch-card"> -->
            <!-- <div class="card"> -->
              <!--  start  modal -->
              <!-- <div id="editData4" class="modal fade">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit Room details</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" id="info_update4">
                      php @include("edit_room.php");
                    </div>
                    <div class="modal-footer ">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div> -->
                    <!-- /.modal-content -->
                  <!-- </div> -->
                  <!-- /.modal-dialog -->
                <!-- </div> -->
                <!-- /.modal -->
              <!-- </div> -->
              <!--   end modal -->
              <!--  start  modal -->
              <!-- <div id="editData5" class="modal fade">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">View Room details</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" id="info_update5">
                    php @include("view_room.php");
                    </div>
                    <div class="modal-footer ">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div> -->
                    <!-- /.modal-content -->
                  <!-- </div> -->
                  <!-- /.modal-dialog -->
                <!-- </div> -->
                <!-- /.modal -->
              <!-- </div> -->
              <!--   end modal -->
          
<!-- container-scroller -->
<!-- php @include("includes/foot.php"); -->
<!-- End custom js for this page -->
<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click','.edit_data4',function(){
      var edit_id4=$(this).attr('id');
      $.ajax({
        url:"thankyou.html",
        type:"post",
        data:{edit_id4:edit_id4},
        success:function(data){
          $("#info_update4").html(data);
          $("#editData4").modal('show');
        }
      });
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click','.edit_data5',function(){
      var edit_id5=$(this).attr('id');
      $.ajax({
        url:"thankyou.php",
        type:"post",
        data:{edit_id5:edit_id5},
        success:function(data){
          $("#info_update5").html(data);
          $("#editData5").modal('show');
        }
      });
    });
  });
</script>

</body>
</html>