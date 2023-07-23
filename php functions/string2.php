<?php 
// add slash

echo addslashes ("hey'how are you'");
echo "<br>";

echo stripslashes("hey\'how are you\'");
echo "<br>";

$hii= "Hey how are you";
print_r(addcslashes($hii,"H"));
echo "<br>";

echo stripcslashes("\Hii how are you");
echo "<br>";


// convert_uuencode
$str="hello world";
print_r(convert_uuencode($str));
echo "<br>";

// convert_uudecode
$str="+:&5L;&\@=V]R;&0` `";
print_r(convert_uudecode($str));
echo "<br>";


// binart to hexa decimal 
$str="hello world";
print_r(bin2hex($str));
echo "<br>";

// hexidecimal to binary 
$str="68656c6c6f20776f726c64";
print_r(hex2bin($str));
echo "<br>";

// print character with ascii number  by decimal ,binary , hexadecimal
echo chr(0101);







?>