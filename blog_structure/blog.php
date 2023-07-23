<?php include 'header.php'; ?>
<?php include 'config.php'; ?>



                    <?php
 
                         $sql = "SELECT * FROM blog";
                         $result = mysqli_query($conn, $sql) or die("Query Failed");
                         while($row = mysqli_fetch_assoc($result)){
                            // 
                            // $id = $row ['p_id'];
                            $title = $row ['title'];
                            $desc = $row ['description'];
                            $date = $row ['post_date'];
                         
 
                     ?>

                        <div class="container-fluid my-5 text-white">
                            <div class="row m-3 bg-white text-dark">

                                <div class="col-md-12 row m-auto">
                                    <div class="col-md-12 p-3 row">
                                    <p class="col-md-12  px-2 text-left"> Date : <?php echo $date ?></p>
                                    <p class="col-md-12  px-2 font-weight-bolder text-uppercase"><?php echo substr($title,0,50) ?></p>
                                    <p class="col-md-12  px-2 text-left"> <?php echo substr($desc,0,380) ?>....</p>
                                    </div>
                                </div>                             
                                
                            </div>
                        </div>

                        <?php }?>
                    
                        
<!-- <?php include 'footer.php'; ?> -->




