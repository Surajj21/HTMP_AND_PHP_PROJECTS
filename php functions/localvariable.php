<?php
// local and global variable
$a=10;
function sum(){
    global $a;
    $b=3;
    echo"global variable is :".$b,"<br>";
    echo"local variable is :".$b,"<br>";


}
sum();


?>