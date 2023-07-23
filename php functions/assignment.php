<?php



// largest of three number 
$n1=9;
$n2=4;
$n3=8;

if($n1>$n2 && $n1>$n3){
    echo "\\\\snumber one is greater :",$n1;
}
else{
    if($n2>$n1 && $n2>$n3){
        echo "\\\\number second is greater :",$n2;

    }
    else {
        echo "\\\\number third is greater :",$n3;
    }
}






// even odd and positive negative 

$x=0;
$y=4;

function pos_ne($x)
{
    if($x>0){
        echo "\\\\number is even :",$x; 
    }
    elseif($x==0){
            echo "\\\\number is zero :",$x;
        }
        else{
            echo "\\\\number is negative :",$x;
        }
    
}

function even_odd($y){
    if ($y % 2 == 0){
        echo "\\\\number is even :",$y;
    }
    elseif($y==0){
        echo "\\\\number is neutral :",$y;
    }
    else {
        echo "\\\\number is odd :",$y;
    }
}




pos_ne($x);
even_odd($y);



// simple intrest 


$p = 5;
$t = 7;
$r = 9;



$SI = ($p * $t * $r) / 100;  //formula


echo "Simple Interest : <br>" , $SI, "<br>";


////////////////////////////////////////////////////


//right anglr trangle

function rat($n)
{
    for ($i = 0; $i < $n; $i++)
    {
        for($j = 0; $j <= $i; $j++ )
        {

            echo "# ";
        }
  
        echo "<br>";
    }
}
  
    $n = 6;
    rat($n);



    //lrft anglr trangle

    // function ratt($n)


//parmid
function triangle($n)
{
      
    $k = 2 * $n - 2;
    for ($i = 0; $i < $n; $i++)
    {
        for ($j = 0; $j < $k; $j++)
            echo " ";
        $k = $k - 1;
        for ($j = 0; $j <= $i; $j++ )
        {
            echo "* ";
        }
        echo "\n";
    }
}
    $n = 5;
    triangle($n);



?>