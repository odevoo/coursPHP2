<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>

<?php

$aTableau  = array(
  array('PHP', 20 ),
  array('JAVA', 20 ),
  array('COBOL', 20 ),
  array('C', 20 )
);
echo '<table class="table table-striped table-bordered"><tbody>';
foreach ($aTableau as $a2Tableau) {
  $contenuTableau = '<tr>';
  foreach ($a2Tableau as $value) {
    $contenuTableau.='<td><button class="btn btn-danger">'.$value.'</button></td>';
  }
  echo $contenuTableau.='</tr>';
}
echo '</tbody></table>';


?>


</body>
</html>
