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

$a=$_POST['id'];

  $requete="SELECT * from personnels where id='$a'";

  $resultat= mysql_query($requete);

  $ligne=mysql_fetch_assoc($resultat);



  echo '<form action="update_employe.php" method="post">';
  echo '<h2>Modification des informations </h2>';

 echo '<p> Identifiant :';
 echo '<input type="text" name="id" value="'.$ligne["id"].'" size="20" readonly></p>';

  echo '<p>Nom :';
  echo '<input type="text" name="nom" size="20" value='.$ligne["nom"].'></p>';

  echo '<p>Prénom :';
  echo '<input type="text" name="prenom" size="20" value='.$ligne["prenom"].'></p>';

  echo '<p>Date de naissance :';
  echo '<input type="text" name="date_naissance" size="20" value='.$ligne["date_naissance"].'></p>';

  echo '<p>Sexe :';
  echo '<input type="text" name="sexe" size="20" value='.$ligne["sexe"].'></p>';

  echo '<p>Fonction :';
  echo '<input type="text" name="fonction" size="20" value='.$ligne["fonction"].'></p>';

  echo '<p>Salaire :';
  echo '<input type="text" name="salaire" size="20" value='.$ligne["salaire"].'></p><br>';

   echo '<p><input class="btn btn-outline-warning btn-lg" type="submit" name="validation" value="Modifier"></p>';
  echo '<input class="btn btn-outline-warning btn-lg" type="reset" name="annuler" value="annuler">';
  echo "</form>";

mysql_close();
?>
<br>
</center>
<br><br><br>
<button class="btn btn-outline-light btn-lg"><a href="index_admin.html">Retour au menu principal</a></button>
</body>
</html>