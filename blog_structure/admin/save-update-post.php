<?php 
    include 'config.php';

    
    $sql = "UPDATE blog SET title = '{$_POST['post_title']}',description = '{$_POST['postdesc']}',post_date = '{$_POST['post_date']}' WHERE post_id = {$_POST['post_id']}" ;
    if(mysqli_query($conn,$sql)){
        header("location: index.php");
    }
    else{
        echo "query failed";
    }


?>