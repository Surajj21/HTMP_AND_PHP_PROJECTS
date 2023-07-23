<?php 

// factioral expressions

$fact=1 ;
$num=6;
$i=1;
while ($i<=$num)
{

    $fact=$fact*$i;
    $i++;
}
echo "factorial is ",$fact,"<br>";


// plendrom number 
$rev=0;
$num=121;
$temp=$num;

while($num!=0){

    $rem=$num%10;
    $rev=$rev*10+$rem;
    $num=$num/10;

}
if($rev==$num)
{
    echo "IT is pelendrom number";
}else{
    echo"IT is not a pelendrom";
}


?>