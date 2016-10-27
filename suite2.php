<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" media="screen" title="no title">
    <title>La suite 2</title>
  </head>
  <body>
  <?php
 $array2Dim = array(
            array('Buire', 880),
            array('Hirson', 9388),
            array('Reims', 181893),
            array('Paris', 2240621)
);


$iNbElem = count($array2Dim);

for ($i=0; $i < $iNbElem ; $i++) {

    foreach ($array2Dim[$i] as $indice => $infoville) {

        echo $infoville.' ';
        if($indice % 2 == 1) echo '<br>';
    }

}

// echo 'la ville de '.$array2Dim[0][0].' à '.$array2Dim[0][1].' Habitants.';
unset($array2Dim);
 ?>

<p>
<?php
$array2Dim2 = array(
           array('ville' => 'Buire', 'population' => 880),
           array('ville' => 'Hirson','population' => 9388),
           array('ville' => 'Reims','population' => 181893),
           array('ville' => 'Paris','population' => 2240621)
  );
  $iCptElem = count($array2Dim2);

  for ($u=0; $u < $iCptElem ; $u++) {

      foreach ($array2Dim2[$u] as $cle => $valeur) {
          if($cle == 'ville') echo 'la ville de '.$valeur;
          if($cle == 'population') echo ' à '.$valeur.' habitants<br/>';
          // if($indice % 2 == 1) echo '<br>';
// echo '<strong>'.$cle.'</strong>: '.$valeur.'<br/>';
      }

  }



 ?>
</p>
  </body>
</html>
