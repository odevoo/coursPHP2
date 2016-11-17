<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Client REST</title>
</head>
<body>
 <?php

 $url = "http://localhost/coursPHP2/webservices/restserv.php?nom=Manu";
 $resultat = file_get_contents($url);
 echo $resultat; 
 ?> 
</body>
</html>


