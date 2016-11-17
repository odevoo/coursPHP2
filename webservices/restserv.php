<?php 

if (isset($_GET['nom'])) {
    $nom = htmlentities(strip_tags($_GET['nom']));
} else {
    $nom = 'World';
}

echo "Hello ".$nom;

 