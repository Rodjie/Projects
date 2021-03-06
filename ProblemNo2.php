<!-- The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17. Find the sum of all the primes below two million. -->


<?php
$limit = 2000000;
$first = 2;

for ($first = 2; $first < $limit; $first += 3) {
   if ($first)
   {
    $first += $first;
   }
}

echo $first;
?>

<!-- Answer: 2621437 -->
<!-- Space -->
<!-- Based on the example -->

<?php
$limit = 10;
$first = 2;

for ($first = 2; $first < $limit; $first += 3) {
   if ($first)
   {
    $first += $first;
   }
}

echo $first;
?>

<!-- Answer: 17 -->
