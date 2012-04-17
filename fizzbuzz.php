<?php 
echo "fizzbuzz go! \n";
for($i=1; $i <100; $i++){
$threes = $i % 3;
$fives = $i % 5;
if($threes == 0) echo "Fizz";
if($fives == 0) echo "Buzz";
if($threes && $fives !== 0) echo $i;
echo "\n";}

echo "I love Hacker School and Etsy";

?>