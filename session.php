<?php
require 'includes/en-tete.php';
require 'includes/navbar.php';
//demarrage de la session (tjrs en haut de la page avant ecriture HTML)
session_start();
if (!isset($_SESSION['cpt'])) {
$_SESSION['cpt'] = 1;
}else {
  $_SESSION['cpt']++;
}

echo '<div class="container"><pre>Nombre de visite sur la page '.$_SESSION['cpt'].'</pre>';
echo "<pre>".print_r($_SESSION)."</pre>";

echo '<pre>'.session_id().'</pre></div>';


require 'includes/pied-de-page.php';

 ?>
