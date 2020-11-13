<?php

$string = "Hello Darkness my old Friend . <br>";
$wc = str_word_count($string);
$wc1 = str_word_count($string,1);
$wc2 = str_word_count($string,2);
$wc3 = str_word_count($string,2,'.');

echo $wc;
print_r($wc1) ;
print_r($wc2);
print_r($wc3);