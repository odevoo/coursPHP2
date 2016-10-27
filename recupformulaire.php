<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
  <title></title>
</head>
<body>
  <?php

  $sLogin = htmlentities(strip_tags($_POST['login']));

  if (isset($_POST['btnSub'])) {

    echo strlen($_POST['login']);

    if (strlen($_POST['login']) <= 5) {echo "Votre login doit comporter plus de 5 caractères";}

    if (strlen($_POST['password']) < 8) { echo "Votre mot de passe doit comporter 8 caractères minimum" ;  }

    else {
      echo '<pre>';
      var_dump($_POST);
      echo '</pre>';
      echo ucfirst($_POST['login']);
      echo '<br>';

      echo "<br>";
      $arrayFrom = array('Homme', 'Femme');
      $arrayTo = array('h', 'f');

      $sexe = str_replace( $arrayFrom, $arrayTo ,$_POST['radio']);
      echo $sexe;
      $iCptMaj = $iCptNb = $iCptSpe = 0;
      $mdp = $_POST['password'];
      $iLonguerMdp = strlen($mdp);
      $aSpec =array('#', '@', '$', '&');
      for($i = 0;$i<$iLonguerMdp;$i++){

        if(is_numeric($mdp[$i])) $iCptNb++;
        if(in_array($mdp[$i], $aSpec)) $iCptSpe++;
        if(strtoupper($mdp[$i])==$mdp[$i]) $iCptMaj++;


      }
      if($iCptMaj>=1 && $iCptNb>=2 && $iCptSpe > 0) echo 'mot de passe OK!<br/>';
      else echo '<br>oups<br/>';
    }

    // echo "Login: ".$_POST['login'].'<br>Password: '.$_POST['password'].'<br>'.$_POST['radio'].'<br>'.$_POST['textarea'].'<br>'.$_POST['select'].'<br>'.$_POST['radio'].'<br>'.$_POST['checkbox'];
  }
  else {
    echo "Vous devez remplir le formulaire d'abord";
  }

  ?>
  <a href="formulaire.php">Retour au formulaire</a>

</body>
</html>
