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
<br><br><br><br><br>
<center>
<?php 
mysql_connect("localhost","root","");
mysql_select_db("zoo");

$b=$_POST["nom"];
$c=$_POST["prenom"];
$d=$_POST["date_naissance"];
$e=$_POST["sexe"];
$f=$_POST["fonction"];
$g=$_POST["salaire"];


$req1="INSERT INTO personnels (nom,prenom,date_naissance,sexe,fonction,salaire) VALUES ('$b','$c','$d','$e','$f','$g')";
mysql_query($req1);

echo"<h1>Employé ajouté</h1>";

mysql_close();
?>
</center>
<br><br><br>
<button class="btn btn-outline-light btn-lg"><a href="index_admin.html">Retour au menu principal</a></button>
</body>
</html>