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



$bdd->exec('INSERT INTO clients(nom, prenom, email) VALUES ("LANDRY", "emmmanuel", "emmanuel.landry@gmail.com")');

$req = 'SELECT numclient FROM clients WHERE nom = "landry"';
echo "<ol>";
foreach ($bdd->query($req) as $aEnregistrement) {
  echo "<li>".$aEnregistrement['numclient']."</li>";
}
echo "</ol>";

$rqNumClient = 'SELECT MAX(numclient) FROM clients';
$stmt = $bdd->query($rqNumClient);
$numClient = $stmt->fetchColumn(0) + 0;





$bdd->exec('INSERT INTO factures(numclient, etat, modereglement) VALUES (5, 1, 2)');
$numFacture = $bdd->lastInsertId();

$req2 = 'SELECT numfacture FROM factures WHERE numclient = 5';

foreach ($bdd->query($req2) as $aEnregistrement) {
  echo "<li>".$aEnregistrement['numfacture']."</li>";
}
echo "</ol>";


$bdd->exec('INSERT INTO commandes(codearticleco, numfacture, quantite) VALUES (1, 6, 2)');
$bdd->exec('INSERT INTO commandes(codearticleco, numfacture, quantite) VALUES (3, 6, 35)');


$req4 = 'SELECT numfacture, codearticleco, designation, marge(puht) as ppht, quantite
FROM commandes
JOIN articles
ON codearticleco = codearticle
WHERE numfacture = 6';

echo "<ol>";
foreach ($bdd->query($req4) as $aEnregistrement) {
  echo "<li>".$aEnregistrement['codearticleco'].' '.$aEnregistrement['designation'].' '.$aEnregistrement['ppht']."</li>";
}
echo "</ol>";

$iCount = $bdd->exec('DELETE from articles WHERE codearticle = 16');

echo $iCount.'Effacement OK';


$iCount2 = $bdd->exec('INSERT INTO articles(designation, puht, quantitestock) VALUES ("Le bandana de Bastien", 2, 1)');

echo '<p>'.$iCount2.'Ajouts</p>';


$iCount3 =  $bdd->exec('UPDATE articles SET quantitestock = quantitestock -1 WHERE codearticle=30');
 echo '<p>'.$iCount3.'Arcticles modifiés</p>';



$req = 'SELECT nom, prenom, email FROM clients';
echo "<ol>";
foreach ($bdd->query($req) as $aEnregistrement) {
  echo "<li>".$aEnregistrement['nom'].' '.$aEnregistrement['prenom'].' '.$aEnregistrement['email'].' '."</li>";
}
echo "</ol>";





$stmt = $bdd->query($req);
while ($aLigne = $stmt->fetch()) {
  echo '<p>'.$aLigne['nom'].' '.$aLigne['prenom'].' '.$aLigne[2].'</p>';
}

$stmt2 = $bdd->query($req);
$aAll = $stmt2->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($aAll);
echo "</pre>";


foreach ($aAll as $iNumeroligne => $aContenuligne) {
  echo $iNumeroligne.' '.$aContenuligne['nom'].'<br>';
}



$req2 = 'SELECT count(codearticle) FROM articles';
$stmt3 = $bdd->query($req2);
$iNbArticles = $stmt3->fetchColumn(0) + 0;

var_dump($iNbArticles);


unset($bdd);
require "includes/pied-de-page.php";

?>
