<?php include 'header.php'; ?>
<?php include 'config.php'; ?>




<div class="col-md-10">
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1 class="admin-heading">All Posts</h1>
                </div>
                <div class="col-md-2">
                    <a class="add-new" href="add-post.php">add post</a>
                </div>
                <div class="col-md-12">
                        <!-- ////////////////////////////////////////////////////////php/////////////////////////////////// -->

                <?php    

                    if($_SESSION['username'] == true){

                    }
                    $user =$_SESSION['username'];
                    $query=mysqli_query($conn,"select * from login where username='$user'");
                    $row2=mysqli_fetch_array($query);
                    $id=$row2["s_no"];

                    $sql ="SELECT * FROM `blog` WHERE user_id= '$id'";
                    $result =mysqli_query($conn,$sql); 
                    ?>
                        <!-- ////////////////////////////////////////////////////////php/////////////////////////////////// -->

                    <table class="content-table">
                        
                    


                        <thead>
                            <th>S.No.</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Author</th>
                            <th>Show</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
        <!-- ////////////////////////////////////////////////////////php/////////////////////////////////// -->
                    <?php while($row = mysqli_fetch_assoc($result)){
                        // 
                        // $id = $row ['p_id'];
                        $title = $row ['title'];
                        $desc = $row ['description'];
                        $date = $row ['post_date'];
                        // $user = $row ['u_name'];

                        ?>
                            <tr class="text-left">
                                
                                <td><?php echo $row['post_id']; ?></td>
                                <td><?php echo substr($title,0,50) ?>...</td>
                                <td class="text-left"><?php echo substr($desc,0,100) ?>...</td>
                                <td><?php echo $date ?></td>
                                <td><?php echo $_SESSION['username']   ?></td>
                                <td class='edit'><a href='show-post.php?id=<?php echo $row['post_id'];?>'>Show</a></td>
                                <td class='delete'><a href='delete-post.php?id=<?php echo $row['post_id'];?>'>Delete</a></td>
                        
                            </tr>
                        <?php }
                        ?>
                        <!-- ////////////////////////////////////////////////////////php/////////////////////////////////// -->

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>


