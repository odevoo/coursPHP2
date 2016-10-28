<?php
$titrePage = "Connexion BDD avec PDO";
require "includes/en-tete.php";
require "includes/navbar.php";

try {

  $bdd = new PDO('mysql:host=localhost;dbname=leperray;charset=utf8', 'root', '');
  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);


} catch (Exception $e) {
  die('Erreur : '.$e->getMessage());
}

// METHODE 1


$req = 'SELECT * FROM clients WHERE nom = ? AND prenom = ? AND email = ?';
$stmt = $bdd->prepare($req);
$stmt->execute(array(
  'LANDRY', 'emmmanuel', 'emmanuel.landry@gmail.com'));
  echo "<pre>";
  if(!$stmt)print_r($bdd->errorInfo());
  print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
  echo "</pre>";

// METHODE 2

  $rqCount = 'SELECT COUNT(numclient) FROM clients WHERE nom = :nom AND prenom = :prenom';
  $stmt2 = $bdd->prepare($rqCount);
  $stmt2->execute(array(
    'nom' => 'LANDRY',
    'prenom' => 'emmmanuel'
  ));

  echo "<pre>";
  if(!$stmt2)print_r($bdd->errorInfo());
  print_r($stmt2->fetchColumn());
  echo "</pre>";

//METHODE 3 REQUETE AVEC VARIABLE LIEES

$rqArtcile = 'SELECT * FROM articles WHERE designation = :ref AND puht > :prix AND quantitestock > :qte';
$stmt3 = $bdd->prepare($rqArtcile);
  if(!$stmt3)print_r($bdd->errorInfo());

$ref = 'Le bandana de Bastien';
$prix= 1.1;
$qte = 0;
$stmt3->bindParam(':ref', $ref , PDO::PARAM_STR, 50);
$stmt3->bindParam(':prix', $prix, PDO::PARAM_STR);
$stmt3->bindParam(':qte', $qte, PDO::PARAM_INT);
$stmt3->execute();
echo "<pre>";
print_r($stmt3->fetchAll(PDO::FETCH_ASSOC));
echo "</pre>";


  require "includes/pied-de-page.php";
  ?>
