hello
<?php 
include('config.php');


if (isset($_POST['send-reset-link'])){
    $sql= "SELECT * FROM `login` WHERE `email` = '$_POST[email]'";
    $result=mysqli_query($conn,$sql);
    if ($result){
        echo 'Run';
        // header("location: index.php");
    }else{

        echo "not worked";
    }

}







?>