<?php
include('includes/checklogin.php');
check_login();
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
    echo "<script>window.location.href ='manage_rooms.php'</script>";
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
    echo "<script>window.location.href ='manage_rooms.php'</script>";
  }else{
    echo "<script>alert('Failed try again later.');</script>" ;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php @include("includes/head.php");?>
<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php @include("includes/header.php");?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <?php @include("includes/sidebar.php");?>
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
                  <button type="submit" style="float: left;" name="save" class="btn btn-primary mr-2 mb-4">Add Room</button>
                </form>
              </div>
            </div>
          </div> 
     
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:../../partials/_footer.html -->
      <?php @include("includes/footer.php");?>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<?php @include("includes/foot.php");?>
<!-- End custom js for this page -->
<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click','.edit_data4',function(){
      var edit_id4=$(this).attr('id');
      $.ajax({
        url:"edit_room.php",
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
        url:"view_room.php",
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