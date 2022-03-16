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

$b=$_POST["nom_race"];
$c=$_POST["type_nourriture"];
$d=$_POST["duree_vie"];
$e=$_POST["animal_aquatique"];


$req1="INSERT INTO especes (nom_race,type_nourriture,duree_vie,animal_aquatique) VALUES ('$b','$c','$d','$e')";
mysql_query($req1);

echo"<h1>Espèce ajoutée</h1>";

mysql_close();
?>
</center>
<br><br><br>
<button class="btn btn-outline-light btn-lg"><a href="index_employe.html">Retour au menu principal</a></button>
</body>
</html>