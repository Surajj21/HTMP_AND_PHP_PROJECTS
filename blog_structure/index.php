<?php include 'header.php';?>
<?php include 'config.php';?>
<?php    
$login= false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username= $_POST["u_name"];
        $password= $_POST["password"];
        $sql="Select * from login where username = '$username' AND   password= '$password'";
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if ($num ==1){
            $login = true;
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
            header("location: admin/index.php");
        }
        else{
            $showError= "INVALID CRENDICIALS";
            }   
        }
?>
<!-- /////////////////////////////////////////////////////////////php//////////////////// -->

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-7 mt-5">
                <div class="">
                    <!-- <img src="img/idex_banner.jpeg" class="" style="width: fit-content;" alt=""> -->
                    <!-- <h5 class="text-center text-white">BLOG COVER BANNER</h5> -->
                </div>
<!-- /////////////////////////////////////////////////////////////php//////////////////// -->

<?php 
    if ($login){
    echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>SUCCESS</strong> You are logged in.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
    if($showError){
        echo' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ERROR!!</strong> '.$showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';

    }

?>
 <!-- ////////////////////////////////////////////////////////php/////////////////////////////////// -->

            </div>
            <!-- login form  -->
            <div class="col-md-4">
                <div class="container p-5 border rounded bg-white">
                    <form autocomplete="off" class="py-2" action="index.php" method="POST">
                        <h4 class="text-center pb-3">LOG IN</h4>
                        <div class="form-group">
                          <label for="l_email">Username</label>
                          <input type="text" class="form-control" id="l_email" name="u_name"  autocomplete="off">
                          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                          <label for="l_password">Password</label>
                          <input type="password" class="form-control" id="l_password" name="password" autocomplete="off">
                        </div>
                        <div class="container form-group pb-5 row m-0">
                            <p class="m-0 p-0 col-md-4 text-danger font-weight-bold text-s"><a href="signup.php" >Sign Up?</a></p>
                            <p class="m-0 p-0 col-md-8 text-danger font-weight-bold text-s"><a href="forgot.php" >Forgot Password?</a></p>
                        </div>
                        
                        <!-- <button type="submit" class="btn btn-primary">login</button> -->
                        <button type="submit" class="btn btn-success">Login</button>
                              
                      </form>
                </div>
            </div>
        </div>
      </div>


    <!-- -----------------------------------------------------------start main content---------------------------------------- -->







    <!-- -----------------------------------------------------------end main content---------------------------------------- -->



    
</body>
</html>