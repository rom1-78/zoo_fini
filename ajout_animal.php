<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css_employe.css">
</head>

<body class="body_employe">
<br><br><br><br><br>
<center>
<?php 
mysql_connect("localhost","root","");
mysql_select_db("zoo");


$b=$_POST["ref_race"];
$c=$_POST["date_naissance"];
$d=$_POST["sexe"];
$e=$_POST["pseudo"];
$f=$_POST["commentaire"];


$req1="INSERT INTO animaux (ref_race,date_naissance,sexe,pseudo,commentaire) VALUES ('$b','$c','$d','$e','$f')";
mysql_query($req1);

echo"<h1>Animal ajouté</h1>";

mysql_close();
?>
</center>
<br><br><br>
<button class="btn btn-outline-light btn-lg"><a href="index_employe.html">Retour au menu principal</a></button>
</body>
</html>