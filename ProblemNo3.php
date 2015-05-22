<!-- By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13. What is the 10 001st prime number? -->

<?php
$first = 0;  
$second = 0;  
$max = 10001;  
for ($i = 3; $second < $max - 1; $i++) {  
  if ($i % 2 != 1) {  
    continue;  
  }  
  $d = 3;  
  $x = sqrt($i);  
  while (($i % $d != 0) && $d < $x) {  
    $d += 2;  
  }  
  if ((($i % $d == 0 && $i != $d) * 1) == 0) {  
    $first = $i;  
    $second++;  
  }  
}  
echo $first;
?>

<!-- 104743 -->
