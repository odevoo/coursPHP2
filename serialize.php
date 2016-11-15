<?php 
$tab = array("index1" => "valeur1", "index2" => "valeur2", "i3" => "v3", "i4" => "v4");

$tabserail = serialize($tab);
echo "<pre>";
 print_r($tabserail);
 echo "</pre>";

file_put_contents('monfichier.txt', $tabserail);

$c = file_get_contents('monfichier.txt');

echo "<pre>";
 print_r($c);
 echo "</pre>";

echo "<pre>";
 print_r(unserialize($tabserail));
 echo "</pre>";

 ?>