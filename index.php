<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ma première page PHP</title>
  <link rel="stylesheet" href="css/style.css"  />
  <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
  <h1><?php

  echo "hello World";
  ?>
</h1>
<p>
  <?php
  $iNombre = 55;
  $sNombre = '45';
  echo $iNombre + $sNombre;
  ?>
</p>
<p>
  <?php
  $fNombre = 5.6;
  echo $fNombre;

define('METEO', 'Pluie');
define('TVA', 1.2);
echo METEO;
echo $iNombre * TVA;

  ?>

</p>
<p>
<?php

$iNote = 0;
if($iNote == 10) echo "La moyenne";
elseif ($iNote < 10) {
  echo "Peut mieux faire";
}
else echo "bien";
?>

<p>
<?php

$sCommentaire= '';

switch ($iNote) {
  case 0:
    $sCommentaire = 'Etes vous venu en cours?';
    break;
  default:
    $sCommentaire = 'mieux';
}

echo $sCommentaire;
?>
</p>
</body>
</html>
