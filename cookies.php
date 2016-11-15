


<?php 
setcookie('moncookie', 'lavaleur', time()+3600);

setcookie('moncookie', 'une autre valeur', time()+3700);

echo $_COOKIE['moncookie'];





?>