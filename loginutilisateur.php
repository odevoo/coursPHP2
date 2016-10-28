<?php
$titrePage = "Connexion BDD avec PDO";
require "includes/en-tete.php";
require "includes/navbar.php";
require "includes/fonctions.php";
require "includes/bdd.php";

if (isset($_POST['btnSub'])) {

  $email = htmlentities(strip_tags($_POST['email']));
  $pwd = htmlentities(strip_tags($_POST['pwd']));

  $req = $bdd->prepare('SELECT password, numclient FROM clients WHERE email = :email');
  $req->execute(array(
    'email' => $email
  ));
  $infoLogin = $req->fetch(PDO::FETCH_ASSOC);


  if (password_verify($pwd, $infoLogin['password'])) {
    echo '<div class="container text-center alert alert-success"><strong>Bonjour '.$infoLogin['numclient'].'</strong></div>';
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";
  }else {
    header('location: connexion.php?msg=Login/password incorrect');
  }

}else {
  header('location: connexion.php?msg=bien tente');
}

require "includes/pied-de-page.php";
?>
