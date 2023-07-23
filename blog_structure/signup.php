
<?php include 'header.php';?>
<?php include 'config.php';?>

<!-- /////////////////////////////////////////////////////////////php//////////////////// -->


<?php    

$showAleart= false;
$exists = true;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $username= $_POST["username"];
    $email= $_POST["s_email"];
    $dob= $_POST["s_dob"];
    $password= $_POST["password"];

    if ($exists = true){
        $sql="INSERT INTO `login` (`username`, `email`, `date`, `password`) VALUES ('$username', '$email', '$dob','$password')";
        $result = mysqli_query($conn,$sql);
        if ($result){
            $showAleart = true;
            header("location: index.php");
        }
    }
     
}
?>
<!-- /////////////////////////////////////////////////////////////php//////////////////// -->


<?php 
    if ($showAleart){
    // echo' <p class="text-white"> successflly data entered </p> ';
    echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>SUCCESS</strong> successflly data entered
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        // </div>';

    }

?>
<!-- /////////////////////////////////////////////////////////////php//////////////////// -->

    <div class="container-fluid mt-3   ">
        <div class="row">
            <div class="col-md-7 mt-2">
                
            </div>
            <!-- login form  -->
            <div class="col-md-5 mt-1">
                <div class="container p-5 border rounded bg-white">
                    <form autocomplete="off" class="py-2" method="POST">
                        <h4 class="text-center pb-3" >Sign Up to Blog</h4>
                        <div class="form-group row">
                            <label for="susername" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="susername" name="username" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="semail" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                            <input type="email " class="form-control" id="semail" name="s_email" placeholder="">
                            </div>
                        </div>
                            <div class="form-group row">
                                <label for="sdate" class="col-sm-3 col-form-label">D.O.B</label>
                                <div class="col-sm-9">
                                <input type="date" class="form-control" id="sdate" name="s_dob" placeholder="">
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="spassword" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                            <input type="password" class="form-control" id="spassword" name="password" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success">Sign Up</button>
                              
                            </div>
                        </div>
                        <p class="text-center"> Already have account?<a href="index.php " class="text-center">Login</a></p>
                        
                        
                      </form>
                      
                </div>
            </div>
        </div>
      </div>