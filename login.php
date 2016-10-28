<?php
$titrePage = "Connexion BDD avec PDO";
require "includes/en-tete.php";
require "includes/navbar.php";
require "includes/fonctions.php";
require "includes/bdd.php";

if (isset($_GET['msg'])) {
  echo '<div class="container text-center alert alert-danger"><strong>'.$_GET['msg'].'</strong></div>';
}

?>
    <div class="container formulaire">

      <form class="form-signin" method="post" action="ajoututilisateur.php">
        <h2 class="form-signin-heading text-center">Créer un compte</h2>
        <label for="mail" class="sr-only">Email</label>
        <input type="email" name="email" id="mail" class="form-control" placeholder="Email" required autofocus>
        <label for="pass" class="sr-only">Mot de passe</label>
        <input type="password" name="pwd" id="pass" class="form-control" placeholder="Mot de passe" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnSub" value="S'enregister">S'enregistrer</button>
      </form>

    </div>
<?php





require "includes/pied-de-page.php";
?>
