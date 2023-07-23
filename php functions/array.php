<?php

// $student = array(101=>"Rahul",102=>"suraj",103=>"priya",104=>"jignesh");
// $student2 = array(101=>"suraj",102=>"rahul",103=>"jignesh",104=>"priya");
// print_r ($student);
// echo "<br>";
// echo "print count:",count($student),"<br>";
// echo "print size of :",sizeof($student),"<br>";
// echo "search value :",array_search("suraj",$student);

// replace the value from first array to second array 
// $student = array(101=>"Rahul",102=>"suraj",103=>"priya",104=>"jignesh");
// $student2 = array(101=>"suraj",102=>"rahul",103=>"jignesh",104=>"priya");
// echo "<pre>";
// print_r (array_replace($student,$student2));
// echo "</pre>";

// $a1=array("a"=>array("red"),"b"=>array("green","blue"),);
// $a2=array("a"=>array("yellow"),"b"=>array("black"));
// print_r(array_replace_recursive($a1,$a2));

// pop array replace from back
// $c1=array("green","yellow");
// array_pop($c1);
// print_r($c1);
// echo "<br>";

// push array--- pust tha value in array in last
// $c2=array("green","yellow");
// array_push($c2,"blue","pink");
// print_r($c2);
// echo "<br>";

// shift array replace from front 
// $p2=array("green","yellow");
// array_shift($p2);
// print_r($p2);
// echo "<br>";

// push array--- pust tha value in array in last
// $p2=array("green","yellow");
// array_unshift($p2,"pink","yellow");
// print_r($p2);
// echo "<br>";

// combine and merge 
// $n=array(1,2);
// $c1=array("green","yellow");
// $c2=array("red","pink");
// print_r(array_merge($c1,$c2));
// echo "<br>";
// print_r(array_combine($n,$c2));


// check the keys 
// $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
// print_r(array_keys($a));

// check the existing key 
// $a=array("Volvo"=>"XC90","BMW"=>"X5");
// if (array_key_exists("suraj",$a))
//   {
//   echo "Key exists!";
//   }
// else
//   {
//   echo "Key does not exist!";
//   }

// slice
// $s1=array("red","pink","black","green","orange");
// print_r(array_slice($s1,0,3));






// array keys 

// $stud = array(101=>"priya",102=>"suraj",103=>"krish",104=>"shub",105=>"jaggu");
// echo "<pre>";
// print_r(array_keys($stud));
// print_r(array_keys($stud,"suraj"));
// echo "</pre>";

// key existance
// if (array_key_exists("105",$stud))
//   {
//   echo "Key exists!";
//   }
// else
//   {
//   echo "Key does not exist!";
//   }

?>


<!-- date 18/07/2021  -->
<?php
// intersect array 
// $stud = array(101=>"priya",102=>"shiva",103=>"suraj",104=>"pinky",105=>"jaggu");


// $stud2 = array(105=>"comma",102=>"suraj",303=>"arjun",104=>"main",105=>"cowa");

// echo "<pre>";
// print common values 
// print_r (array_intersect($stud,$stud2));

// print common keys 
// print_r(array_intersect_key($stud,$stud2));

// print diferent values
// print_r(array_diff($stud,$stud2));

// print diferent keys
// print_r(array_diff_key($stud,$stud2));

// print values of array single parameter
// print_r(array_values($stud));

// print unique values in singl parameter
// print_r(array_unique($stud));

// print change value in singl parameter
// print_r(array_flip($stud));


$stud3= array("first","comma","second","suraj","third","arjun","forth","main");

// print change to uppercars
// print_r(array_change_key_case($stud3,CASE_UPPER));

$value= array(10,20,30,44,55,66,2,56,4);
echo "<pre>";

// print the sum total of array 
// print_r(array_sum($value));

//print the random vale from array
// print_r(array_rand($value,5));

//print the suffel vale from array
// shuffle($stud3);
// echo "<pre>";
// print_r($stud3);
// echo "</pre>";

// print tyhe same value automatically
// $emp =array_fill(0,5,rahul);
// echo "<pre>";
// print_r($emp);
// echo "</pre>";

// sortinfg the array vqalue 
$emp =array("suraj","hello","pankaj","bello","xyz","aman");
// sort($emp);
// echo "<pre>";
// print_r($emp);
// echo "</pre>";

// rsort($emp);
// echo "<pre>";
// print_r($emp);
// echo "</pre>";



// arsorting with associtavi array

// $stud2 = array(105=>"comma",102=>"suraj",303=>"arjun",104=>"main",105=>"cowa");

// assort($stud2);
// echo "<pre>";
// print_r($stud2);
// echo "</pre>";

// arsort($stud2);
// echo "<pre>";
// print_r($stud2);
// echo "</pre>";


// print list value 
// $emp =array("suraj","hello","pankaj","bello");
// list($s1,$s2,S34,S4) = $emp;


// echo $s1,$s2,$s3;









echo "</pre>";

?>

 
