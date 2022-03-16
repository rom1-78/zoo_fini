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

	<center>
		<h1>informations de l'animal recherché</h1>
<?php 
mysql_connect("localhost","root","");
mysql_select_db("zoo");

$a=$_POST['animal'];
$requete=("SELECT * FROM animaux WHERE pseudo='$a'");
$resultat=mysql_query($requete);
	
?>

<table border="1" width="99%">
	<tr>
		<td>Identifiant</td>
		<td>Reference de la race</td>
		<td>Date de naissance</td>
		<td>Sexe</td>
		<td>Pseudo</td>
		<td>Commentaire</td>
	</tr>

	<?php while($enreg=mysql_fetch_array($resultat))
	{
		?>
		<tr>
			<td><?php echo $enreg["id"];?></td>
			<td><?php echo $enreg["ref_race"];?></td>
			<td><?php echo $enreg["date_naissance"];?></td>
			<td><?php echo $enreg["sexe"];?></td>
			<td><?php echo $enreg["pseudo"];?></td>
			<td><?php echo $enreg["commentaire"];?></td>
		</tr>
	<?php	
	} ?>
</table>
<?php
mysql_close();
?>
<br>
<button class="btn btn-outline-success btn-lg"><a href="modification_animaux.html">Modifier</a></button>
<button class="btn btn-outline-success btn-lg"><a href="informations_animal.php">Information</a></button>
</center>
<br><br><br>
<button class="btn btn-outline-light btn-lg"><a href="index_employe.html">Retour au menu principal</a></button>
</body>
</html>