<?php

// $student = array(101=>"Rahul",102=>"suraj",103=>"priya",104=>"jignesh");

$emp = array(
    array(101,"suraj",80),
    array(102,"Priya",90),
    array(103,"jignesh",90)
);


for($row=0;$row<3;$row++)
{
    for($col=0;$col<3;$col++)
    {
        echo $emp[$row][$col]."&nbsp";
    }
    echo "<br>";
}


/*
for($i=0;$i<=3;$i++){
    echo $student[$i]."<br>";
}
*/

// echo "<pre>";
// print_r($student);
// echo "</pre>";

?>