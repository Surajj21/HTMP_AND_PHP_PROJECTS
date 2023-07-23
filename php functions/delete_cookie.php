<?php 
    setcookie("user"," ",time() - (86400*30),"/");
    echo "cookie deleted";
?>