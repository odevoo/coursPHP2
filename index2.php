<?php
$titrePage = "Includes et compagnie";
include "includes/en-tete.php";
include "includes/navbar.php";



$aLangages = array(
  array('langage' => 'PHP', 'age' => 20),
  array('langage' => 'C', 'age' => 20),
  array('langage' => 'COBOL', 'age' => 20),
  array('langage' => 'C++', 'age' => 20),
  array('langage' => 'C#', 'age' => 20),
  array('langage' => 'JAVA', 'age' => 20)
);
echo '<table class="table table-striped table-bordered"><thead>';

foreach ($aLangages as $id => $a2langage) {

  if ($id == 0) {
    $enteteTableau = '<tr>';
    $contenuTableau = '<tr>';
    foreach ($a2langage as $entete => $value) {
      $enteteTableau.= '<th>'.strtoupper($entete).'</th>';
      if(is_numeric($value)) $contenuTableau.='<td class="text-right">'.$value.'</td>';
      else  $contenuTableau.='<td>'.$value.'</td>';
    }
    echo $enteteTableau.= '</tr></thead><tbody>';
    echo $contenuTableau.='</tr>';
  }
  else {
    echo "<tr>";
    foreach ($a2langage as $value) {
      if(is_numeric($value)) echo '<td class="text-right">'.$value.'</td>';
      else echo '<td>'.$value.'</td>';

    }
    echo "</tr>";
  }
}
//  $iArrayCount = count($aLangages);
//  echo $iArrayCount;
// for ($i=0; $i < $iArrayCount ; $i++) {
//   echo '<table class="table table-striped table-bordered"><thead><tr><th>'.$aLangages[$i][$i].'</th></tr></thead><tbody>';
// }
// foreach ($aLangages as $title) {
// echo '<table class="table table-striped table-bordered"><thead><tr><th>'.$title[0][1].'</th></tr></thead><tbody>';
//  <tr><th>Langage</th><th>age</th></tr></thead><tbody>';
//   foreach ($aLangages as $langage ) {
//
//       echo '<tr><td>'.$langage['langage'].'</td><td>'.$langage['age'].'</td></tr>';
// }
//
//
//
//   }
echo '</tbody></table>';

///////////////////////////////////////////////////////////////////

$sDate1 = "26/10/2016";
$sDate2 = "2016-10-26";

echo '<p>'.dateUs($sDate1).'</p>' ;
echo '<p>'.dateFr($sDate2).'</p>' ;
function dateUs($dte){

  $dtereturn = explode('/', $dte);
  return $dtereturn[2].'-'.$dtereturn[1].'-'.$dtereturn[0];

}

function dateFr($dte){
  return substr($dte, 8, 2).'/'.substr($dte, 5, 2).'/'.substr($dte, 0, 4);
}
///////////////////////////////////////////////////////////////////

$aTab1 = array(1,2,3,4,5,6,7,8,9);
$aTab2 = array('a' => 1 ,'b' => 2,'c' => 3,'d' => 4,'e' => 5 );

function impaire($val){
  return ($val & 1);
}
function paire($val){
  return !($val & 1);
}

echo "<pre>";
print_r(array_filter($aTab1, 'paire'));
print_r(array_filter($aTab2, 'impaire'));
echo "</pre>";

///////////////////////////////////////////////////////////////////

function double($val){

  return $val * 2;
}

function cube($val){
  return $val ** 3;
}

function racine($val){
  return $val ** 0.5;
}
function carre($val){
  return $val * $val;
}
echo "<pre>";
print_r(array_map('double', $aTab2));
print_r(array_map('cube', $aTab1));
echo racine(200).'<br>';
echo carre(19);
echo "</pre>";
include "includes/pied-de-page.php";

?>
