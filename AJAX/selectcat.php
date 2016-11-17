<?php 

$pdo = new PDO('mysql:dbname=bioforce3;host=localhost;charset=utf8', 'root', '');

$cat = $_GET['cat'];

$req = 'SELECT idProduit, libProduit FROM produits WHERE idCategorie = ?';

$stmt = $pdo->prepare($req);
$stmt->execute([$cat]);
$result = $stmt->fetchAll();
foreach ($result as $produit) {
    echo '<option value="'.$produit['idProduit'].'">'.$produit['libProduit'].'</option>';
    
}
 ?>
 