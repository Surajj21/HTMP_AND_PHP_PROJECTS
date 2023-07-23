<?php 

echo "today is".date("d")."<br>";
echo "today is".date("jr")."<br>";
echo "month is".date("f")."<br>";
echo "month is".date("n")."<br>";
echo "month is".date("M")."<br>";
echo "month is".date("y")."<br>";
echo "full date is ".date("d-m-y")."<br>";
echo "full date is ".date("d/m/yy")."<br>";



//time zone
echo "".date_default_timezone_set("Asia/Kolkata");
echo "Time is ".date("h:i:sa e")."<br>"; // german time













?>