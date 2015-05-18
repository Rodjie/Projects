<!--There exists exactly one Pythagorean triplet for which a + b + c = 1000. Find the product abc.-->


<!--We need to loop for the possible value of a and b then calculate the c if that is a soluton.-->
<!--The product is 31875000. http://sandbox.onlinephpfunctions.com is my php code tester. -->

<?php
$a = 1;
$b = 2;
while (true) {
    $c = 1000 - $a - $b;
    
    if ($a * $a + $b * $b == $c * $c) {
        break;
    }
    
    if ($a + 1 < $b) {
        $a++;
    } else {
        $a = 1;
        $b++;
    }
    
}
echo ($a * $b * $c);
?>
