/* Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be: 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, . . .
By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms. */


<?php
$x = 2;  
$y = 1;  
$sum = 2;  
$n = 0;  
while ($n < 4000000)   
{  
 $n = $x + $y;  
 $y = $x;  
 $x = $n;  
 if (!($n % 2))   
 {  
  $sum += $n;  
 }  
 }  
 echo $sum;
 ?>
 
<!-- Answer: 4613732 -->