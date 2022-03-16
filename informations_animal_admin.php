<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css_admin.css">
</head>
<body class="body_admin">
	<br><br>
<center>
<h1>informations des animaux pour plus d'infos</h1>
<br><br><br>
<?php 
mysql_connect("localhost","root","");
mysql_select_db("zoo");


$requete=("SELECT * FROM animaux");
$resultat=mysql_query($requete);
	
?>

<table border="1" width="99%">
	<tr>
		<td>Identifiant</td>
		<td>Reference de la race</td>
		<td>Date de naissance</td>
		<td>Pseudo</td>
		<td>Sexe</td>
		<td>Commentaire</td>
		<td>supprimer</td>
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
			<?php
	 		echo "<td><a href='supprime_animal_admin.php?pseudo=".$enreg['id']."'>Supprimer</a></td>";
	 		?>
		</tr>
	<?php	
	} ?>
</table>
<?php
mysql_close();
?>
<br>
<button class="btn btn-outline-warning btn-lg"><a href="modification_animaux_admin.html">Modifier</a></button>
</center>
<br><br><br>
<button class="btn btn-outline-light btn-lg"><a href="index_admin.html">Retour au menu principal</a></button>
</body>
</html>