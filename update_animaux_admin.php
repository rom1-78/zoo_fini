<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css_admin.css">
</head>
<body class="body_admin">

  <center>
   <?php
    mysql_connect("localhost","root","");
    mysql_select_db("zoo");

    $id = $_POST["id"];
    $ref_race = $_POST["ref_race"];
    $date_naissance = $_POST["date_naissance"];
    $sexe = $_POST["sexe"];
    $pseudo = $_POST["pseudo"];
    $commentaire = $_POST["commentaire"];

    $requete = "UPDATE animaux SET
    date_naissance='$date_naissance',
    sexe='$sexe',
    pseudo='$pseudo',
    commentaire='$commentaire'
    WHERE id= $id";
  
    $resultat = mysql_query($requete);

     echo"<center><h1>Modification effectuée</h1></center>";
    mysql_close();
  ?>
  <br><br>
	<button class="btn btn-outline-warning btn-lg"><a href="informations_animal_admin.php"> Voir les changement effectués</a></button>
  </center>
  <br><br>
  <button class="btn btn-outline-light btn-lg"><a href="index_admin.html">Retour au menu principal</a></button>
</body>
</html>