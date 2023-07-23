<?php
echo "<pre>";

// explode
$str = "Honesty is the best policy";
print_r (explode(" ",$str ));

// implode
$col = array("red","blue","pink","black");
echo implode(" ",$col);

// join
$col = array("red","blue","pink","black");
echo join(" ",$col);

// split
$wel= "welcome";
print_r(str_split($wel));
echo "<br>";

// chunk 
$wel= "welcome";
print_r(chunk_split($wel,"1","."));
echo "<br>";

// strtolower
$wel= "welcome";
print_r(strtolower($wel));
echo "<br>";

// strtoupper
$wel= "welcome";
print_r(strtoupper($wel));
echo "<br>";

// ucfirst
$wel= "honesty is the best policy"; 
print_r(ucfirst($wel));
echo "<br>";

// lcfirst
$wel= "Honesty is the best policy"; 
print_r(lcfirst($wel));
echo "<br>";

// ucwords
$wel= "Honesty is the best policy"; 
print_r(ucwords($wel));
echo "<br>";

// strlen
$wel= "Honesty is the best policy"; 
print_r(strlen($wel));
echo "<br>";

// str_word_count
$wel= "Honesty is the best policy"; 
print_r(str_word_count($wel));
echo "<br>";


echo "<br>";

// strpos
$wel= "hello suraj, hello jaggu , hello shivan sir"; 
print_r(strpos($wel,"hello",6));
echo "<br>";
// strrpos
$wel= "hello suraj, hello jaggu , hello shivan sir"; 
print_r(strlen($wel));
echo "<br>";
print_r(strrpos($wel,"hello",6));
echo "<br>";

// strstr search str
$wel= "Honesty is the best policy"; 
print_r(strstr($wel,"is"));
echo "<br>";

// sub string
$wel= "Honesty is the best policy"; 
print_r(substr($wel,8,15));
echo "<br>";

// str_replace case sensitive
$wel= "hello world"; 
print_r(str_replace("world","suraj",$wel));
echo "<br>";


// str_ireplace non case sensitive
$wel= "hello World"; 
print_r(str_ireplace("world","suraj",$wel));
echo "<br>";


// substr_replace by length
$wel= "Honesty is the best policy"; 
print_r(substr_replace($wel,"is a",8,11));
echo "<br>";


//  word count
$wel= "Honesty is the best policy is the best"; 
print_r(substr_count($wel,"best"));
echo "<br>";

//  wcompare string if same calue is - not same value is + case sencitive
$wel= "hello suraj welcoe"; 
$str= "hello suraj welcome";
print_r(strcmp($wel,$str));
echo "<br>";

//  wcompare string if same calue is - not same value is + case sencitive
$wel= "Hello suraj welcome"; 
$str= "hello suraj wecome";
print_r(strcasecmp($wel,$str));
echo "<br>";

//  sub string compare  ----------------------------doubt
// $wel= "hello suraj welcome"; 
// $str= "hello suraj welcome";
// print_r(substr_compare($wel,$str,7));
// echo "<br>";


//  str revers
$wel= "Hello suraj welcome"; 
print_r(strrev($wel));
echo "<br>";


//  str str suffle
$wel= " hello suraj is the best biker"; 
print_r(str_shuffle($wel));
echo "<br>";

//  str padding
$wel= " welcome"; 
print_r(str_pad($wel,20,"."));
echo "<br>";

//  str str_repeat
$wel= " welcome"; 
print_r(str_repeat($wel,10));
echo "<br>";


// trim 
$tri = "welcomev";
print_r(trim($tri,"wv"));
echo "<br>";

// ltrim 
$tri = "welcome";
print_r(ltrim($tri,"w"));
echo "<br>";

// rtrim 
$tri = "welcome";
print_r(rtrim($tri,"e"));
echo "<br>";


























echo "</pre>";
?>