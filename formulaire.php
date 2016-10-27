<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css" media="screen" title="no title">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <title>Formulaire</title>
</head>
<body>
  <form class="" action="recupformulaire.php" method="post">
    <div><input type="text" name="login" value="" placeholder="login"></div>
    <div><input type="password" name="password" value="" placeholder="Password"></div>

    <div><input type="radio" name="radio" value="Femme"><label>Femme</label>
      <input type="radio" name="radio" value="Homme"><label>Homme</label></div>
      <div><textarea name="textarea" rows="8" cols="40" value=""></textarea></div>

      <div><input type="file" name="file" value=""></div>
      <div><select class="select" name="select">
        <option value="1">1</option>
        <option value="2">2</option>
      </select></div>
      <div><input type="checkbox" name="checkbox" value="majeur"><label>Majeur</label>
        <input type="checkbox" name="checkbox" value="mineur"><label>Mineur</label></div>
        <div><input type="submit" name="btnSub" value="GO"></div>
      </form>

      <div><input type="color" id="color" name="color" value="#rrggbb"></div>
      <div><input type="submit" id="btn" name="name" value="Changer de couleur"></div>

      <?php




      ?>
      <script type="text/javascript" src="js/script.js"></script>
    </body>
    </html>
