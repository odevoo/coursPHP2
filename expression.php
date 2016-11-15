<?php

$tel1 = "01 02 03 04 05";
$tel2 = "01.02.03.04.05";
$email = "emmanuel.landry@gmail.com";

$filtre1 = "/(\d\d\s){4}(\d\d)/";
$filtre2 = "#(\d\d\.){4}(\d\d)#";
$filtre3 = "#^[\w\.\-]+@+[\w\.\-]+\.[a-z]{2,4}$#i";

echo "<div>";
if (preg_match($filtre1, $tel1)) {
  echo "le format est correct";
} else {
  echo 'le format doit être "01 01 01 01 01"';
}
echo "</div>";

if (preg_match($filtre2, $tel2)) {
  echo "le format est correct";
} else {
  echo 'le format doit être "01.01.01.01.01"';
}
echo "</div>";

echo "<div>";
if (preg_match($filtre3, $email)) {
  echo "le format est correct";
} else {
  echo 'le format doit être "nom.prenom@mail.com"';
}
echo "</div>";
/////////////////////////////////////////
echo "<pre>";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "email ok";
} else {
  echo "email non valide";
}
echo "</pre>";
