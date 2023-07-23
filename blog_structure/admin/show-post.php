<?php include "header.php"; ?>
<?php include 'config.php'; ?>

<div class="col-md-10">
<div id="admin-content">
      <div class="container">
         <div class="row">

              <div class="col-md-12 ">
 <!-- ////////////////////////////////////////////////////////php/////////////////////////////////// -->

                        <?php
                         include 'config.php';
                         $p_id = $_GET['id'];
 
                         $sql = "SELECT * FROM blog WHERE blog.post_id = $p_id";
                         $result = mysqli_query($conn, $sql) or die("Query Failed");
                         if(mysqli_num_rows($result) > 0){
                             while($row  = mysqli_fetch_assoc($result)){
 
                     ?>

 <!-- ////////////////////////////////////////////////////////php/////////////////////////////////// -->

                  
                    
                  <form  action="show-post.php" method="POST" class="border rounded">
                        <div class="row">
                        <div class="col-md-10">
                            <h1 class="admin-heading">Review New Post</h1>
                        </div>
                        <div class="col-md-2">
                        <a class="btn btn-primary" href="edit-post.php?id=<?php echo $row['post_id'];?>">Edit Post</a>
                        </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="post_id"  class="form-control" value="<?php echo $row['post_id']; ?>" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="post_title">Title</label>
                            <input type="text" name="post_title" class="form-control" autocomplete="off" value="<?php echo $row ['title']; ?>" required>
                        </div>
                        <div class="form-group">
                            <!-- <label for="post_title"></label> -->
                            <input type="date" name="post_date" class="form-control" autocomplete="off" value="<?php echo $row['post_date']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Description</label>
                            <textarea name="postdesc" class="form-control" rows="5"   required><?php echo $row['description']; ?></textarea>
                        </div>
                        <!-- <input type="submit" name="submit" class="btn btn-primary" value="Update Post" required /> -->
                  </form>

                  <?php 
                }
            }
        ?>
                  
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>
</div>

<?php include "footer.php"; ?>
