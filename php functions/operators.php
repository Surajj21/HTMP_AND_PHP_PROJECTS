//////////////operatorts///////////////////////////////////////////////////


// arthematic operator 

  

$x = 10;
$y = 5;
  
echo "add :",($x + $y), "<br>";
echo"subtract :",($x - $y), "<br>";
echo"multiplication :",($x * $y), "<br>";
echo"division :",($x / $y), "<br>";
echo"modulus :",($x % $y), "<br>";
  

//logical operator

$x = 50;
$y = 30;
  
if ($x == 50 and $y == 30)
    echo "and Success <br>";
  
if ($x == 50 or $y == 20)
    echo "or Success <br>";
  
if ($x == 50 xor $y == 20)
    echo "xor Success <br>";


    ///compare operator

    
  
$a = 40;
$b = 20;
$c = "40";
  
var_dump($a == $c) +  "\n";
var_dump($a != $b) +  "\n";
var_dump($a <> $b) +  "\n";
var_dump($a === $c) + "\n";
var_dump($a !== $c) + "\n";
var_dump($a < $b) +   "\n";
var_dump($a > $b) +   "\n";
var_dump($a <= $b) +  "\n";
var_dump($a >= $b);
  


?>
