<?php include "header.php"; ?>
<?php include "config.php"; ?>

                        <!-- ////////////////////////////////////////////////////////php/////////////////////////////////// -->

<?php    





if($_SESSION['username'] == true){

}
$user =$_SESSION['username'];
// echo $user;
$query=mysqli_query($conn,"select * from login where username='$user'");
$row=mysqli_fetch_array($query);
$id=$row["s_no"];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $title= $_POST["p-title"];
    $disc= $_POST["p-desc"];

    $sql="INSERT INTO `blog` (`title`, `description`, `post_date`, `user_id`) VALUES ('$title', '$disc', current_timestamp(),'$id')";
    $result = mysqli_query($conn,$sql) or die("query failed");
    if ($result){
        // echo $result;
        header("location: index.php");
    }
    
}
?>
                        <!-- ////////////////////////////////////////////////////////php/////////////////////////////////// -->


                        <!-- ////////////////////////////////////////////////////////php/////////////////////////////////// -->





<div class="col-md-10">
<div id="admin-content">
      <div class="container">
         <div class="row">

              <div class="col-md-12 ">
                  <!-- Form -->
                  <form method="POST" class="border rounded">
                        <div class="row">
                        <div class="col-md-10">
                            <h1 class="admin-heading">Add New Post</h1>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="post_title">Title</label>
                            <input type="text" name="p-title" class="form-control" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Description</label>
                            <textarea name="p-desc" class="form-control" rows="5"  required></textarea>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>
</div>


<?php include "footer.php"; ?>
