<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    $wsdl = "http://www.webservicex.net/whois.asmx?wsdl";
    $client = new SoapClient($wsdl);
    $resultat = $client->GetWhoIS(array('HostName' => 'odevoo.com'));
    echo "<pre>";
    echo $resultat->GetWhoISResult;
    echo "</pre>";
    
     ?>
    
</body>
</html>