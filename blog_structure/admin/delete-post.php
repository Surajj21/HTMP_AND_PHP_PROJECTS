<?php 
   include 'config.php';
   $p_id = $_GET['id'];

    $sql = "SELECT * FROM blog WHERE post_id = {$p_id}";

    $result = mysqli_query($conn, $sql);
 
   

   $sql1 = "DELETE FROM blog WHERE post_id = {$p_id};";
    if(mysqli_query($conn, $sql1)){
    header("Location: index.php");
}


?>