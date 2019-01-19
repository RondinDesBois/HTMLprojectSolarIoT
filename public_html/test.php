<?php 


$var1 = $_GET["data"];
$var2 = explode(",", $var1);
$var3 = explode(":", $var2[2]);
$var4 = str_replace('"', "",  $var3[1]);
$data = str_replace('\n', "",  $var4);

$monfichier = fopen('e.txt', 'r+');
$debug = fopen('debug.txt', 'r+');

ftruncate($monfichier, 0); 
ftruncate($debug, 0); 

fputs($monfichier, $data);
fputs($debug, $var1); 

fclose($monfichier);
?>
