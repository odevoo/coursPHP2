<?php

// controles des emails

function ctrlEmail($mail){

  $iOK = 0;

  //verification @

  if (strpos($mail, '@')) {
    $iOK++;
  }

  if (substr($mail, -4) == '.com') {
    $iOK++;
  }

  if (substr($mail, -3) == '.fr') {
    $iOK++;
  }

  if ($iOK >= 2) {
    return true;
  } else {
    return false;
  }

}

// controle de mot de passe
function ctrlMdp($mdp){
  $iTaille = strlen($mdp);
  $iCptNum = $iCptMaj = 0;
  for ($y=0; $y < $iTaille ; $y++) {
    if (is_numeric($mdp[$y])) {
      $iCptNum++;
    }
    elseif (strtoupper($mdp[$y]) === $mdp[$y]) {
      $iCptMaj++;
    }
  }
  if ($iTaille >= 8 && $iCptMaj >=1 && $iCptNum >=1) {
    return true;
  } else {
    return false;
  }
}



?>
