<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Client REST</title>
</head>
<body>
 <?php

 $url = "http://localhost/coursPHP2/webservices/bioforceserv.php?cat=1";
 $resultat = file_get_contents($url);
 $produits = json_decode($resultat, true); 
 //echo "<pre>";
 //print_r($produits);
 //echo "</pre>";
 echo '<div class="container">';
 echo '<div class="container"><h1 class="text-center">Produits proposés par notre partenaire BioForce3</h1></div>';
 echo '<table class="table table-striped table-bordered table-hover">
           <thead> 
            <tr>
                <th>Reference</th>
                <th>Libellé</th>
                <th>Description</th>
                <th>Prix</th>
            </tr>
           </thead> 
            <tbody>';

    foreach ($produits as $prod) {
        echo "<tr><td>".$prod['idProduit'].'</td>
                <td>'.$prod['libProduit'].'</td>
                <td>'.$prod['descProduit'].'</td>
                <td>'.$prod['prixProduit'].'</td></tr>';


    }


 echo "</tbody>
    </table></div>";               
 ?> 
</body>
</html>


