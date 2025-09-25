<?php
$jsnobj = '{"Apel":"Apel", "Mangga":"Mangga", "Jeruk":"Jeruk"}';

$arr = json_decode($jsnobj, true);

// mengakses nilai array
echo $arr['Apel'];
echo $arr['Mangga'];
echo $arr['Jeruk'];
?>