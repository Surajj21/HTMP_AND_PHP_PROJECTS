<?php include 'config.php';?>

<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADMIN DASHBOARD</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <!-- <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css"> -->
        <link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>




    <body>
        <div class="cntainer.row">
                        <!-- ////////////////////////////////////////////////////////php/////////////////////////////////// -->
<?php 
    session_start();


    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !=true){

        header("location:../index.php");
        exit();
    }
?>
                        <!-- ////////////////////////////////////////////////////////php/////////////////////////////////// -->
            
                        



                            <!-- HEADER -->
                            <div id="header-admin" style="background-color: orangered;" class="row  container-fluid  ">
                                <h1 class="text-light px-5 col-md-9">Dashboard</h1>  
                                        <!---- user Show------>
                                        <div class="col-md-3 text-right">
                                            <a class="admin-logout text-right" href="#" style="text-transform:lowercase;">Welcome <?php echo $_SESSION['username']   ?><i class="fa fa-user-o" style="color:#fff;font-size:16px;"></i>  
                                            </a>
                                        </div>
                                </div>
                            
                            <!-- /HEADER -->
                            <!-- Menu Bar -->

                            <div class="container-fluid m-0 p-0 row">
                                <div class="nav col-md-2 mt-3">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="btn py-4 px-5 font-weight-bolder text-white my-2" style="background-color: orangered;" id="v-pills-home-tab" data-toggle="pill" href="index.php" role="tab" aria-controls="v-pills-home" aria-selected="true">Blogs</a>
                                        <a class="btn py-4 px-5 font-weight-bolder text-white my-2" style="background-color: orangered;" id="v-pills-profile-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-profile" aria-selected="false">profile</a>
                                        <a class="btn py-4 px-5 font-weight-bolder text-white my-2" style="background-color: orangered;" id="v-pills-messages-tab" data-toggle="pill" href="logout.php" role="tab" aria-controls="v-pills-messages" aria-selected="false">Logout</a>
                                        <!-- <a class="btn py-4 px-5 font-weight-bolder text-white my-2 btn-primary" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> -->
                                    </div>
                                </div>