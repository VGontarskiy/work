<?php

$string1 = "a1b2c3";
$regexp = "![0-9]{1,}!";
function cube($s){
    return ($s[0]**3);
}
echo preg_replace_callback($regexp,'cube',$string1);
?>