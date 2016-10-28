<?php
$titrePage = "Connexion BDD avec PDO";
require "includes/en-tete.php";
require "includes/navbar.php";
require "includes/fonctions.php";
require "includes/bdd.php";

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$email = htmlentities(strip_tags($_POST['email']));
$pwd = htmlentities(strip_tags($_POST['pwd']));

if (isset($_POST['btnSub'])) {

  if (ctrlEmail($email)) {
    if (ctrlMdp($pwd)) {

       $hash = password_hash($pwd, PASSWORD_DEFAULT);
       $reqinsert = $bdd->prepare('INSERT INTO clients(email, password) VALUES(:email, :password)');
       $reqinsert->execute(array(
         'email' => $email,
         'password' => $hash
         ));
          if ($reqinsert !== false) {
            echo '<div class="container text-center alert alert-success"><strong>Votre compte a été créé</strong></div>';
          }
    }else {
      header('location: login.php?msg=mot de passe incorrect');
    }

  } else {
    header('location: login.php?msg=email incorrect');
  }



}
else {
  header('location: login.php?msg=bien tente');
}

require "includes/pied-de-page.php";
?>
