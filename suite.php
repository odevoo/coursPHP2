
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
      <title>Bonjour la suite</title>
  </head>
  <body>
    <?php
      echo '<ul>';
      for ($i=0; $i <= 10 ; $i++) {

      echo '<li>'.$i.'</li>';

    }
      echo '</ul>';
?>
<p>
<ul>
<?php
$a =0;
while ($a <= 10) {
 echo '<li>'.$a++.'</li>';
} ?>
</ul>
</p>
<p>
<?php
$u = 0;
do {
  echo '<h4>'.$u++.'</h4>';

} while ($u <= 10);

 ?>


</p>
<p>
<?php

 $arrayMarque = array('Renault', 'Dacia', 'BMW', 'Mini', 'Rolls royce', 'Mercedes', 'Smart', 'Porsche', 'Toyota', 'lexus', 'Nissan');
echo count($arrayMarque);
echo "<ul>";
foreach ($arrayMarque as $marque) {
  echo '<li>'.$marque.'</li>';

}
echo '</ul>';

 ?>
</p>
<P>
<?php
 $arrayMarque = array('Marque' => 'Fiat',
'Modèle' => '500',
'cheveaux' => '4',
'Places' => '4');
foreach ($arrayMarque as $indice => $smarque) {
  echo '<li>'.$indice.':'.$smarque.'</li>';

}
echo "</ul>";
echo "<pre>";
print_r($arrayMarque);
echo "</pre>";
 ?>
</p>
<p>
<?php
for ($o=10; $o>=0 ; $o--) {
   if($o % 2 == 1) continue;
  if ($o == 0)break;
    echo $o.':'.(10 / $o).'<br/>';




}
unset($indice);
if(isset($o)) echo 'la variable $o existe';
else echo 'la variable $o n\'existe pas';
if(empty($indice)) echo 'la variable $indice n\'existe pas';
else echo 'la variable $indice existe';
 ?>
<p>
<?php
echo date('d/m/Y').date('H:i:s');
 ?>
</p>
  </body>
</html>
