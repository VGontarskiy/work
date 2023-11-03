<?php

$string = "ahbacbaebaeebadcbaxeb";
echo $string;
echo "<br>";
$regexp = '!a[a-z]{2}b!';
$mathces = array();
$count = preg_match_all($regexp,$string,$matches);
var_dump($matches);
echo "<br>";
echo "<br>";
