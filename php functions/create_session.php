<?php 
    session_start();
    $_SESSION['user']="suraj time pass";

?>
<html>
    <body>
        <?php 
            if(isset($_SESSION['user']))
            {
                echo $_SESSION['user'];
            }
        
        ?>
    </body>

</html>