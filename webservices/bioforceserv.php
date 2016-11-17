<?php 
header('Access-Control-Allow-Origin: *');
if (isset($_GET['cat'])) {
    $cat = htmlentities(strip_tags($_GET['cat']));
    $pdo = new PDO('mysql:dbname=bioforce3;host=localhost;charset=utf8', 'root', '');
    $req = $pdo->prepare('SELECT * FROM produits WHERE idCategorie = ?');
    $req->execute([$cat]);
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    /*echo "<pre>";
    print_r($result);
    echo "</pre>";*/

    echo json_encode($result);

}