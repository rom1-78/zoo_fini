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
	<center><h1>Informations sur les employés</h1>
		<br><br><br>
<?php 
mysql_connect("localhost","root","");
mysql_select_db("zoo");


$requete=("SELECT * FROM personnels");
$resultat=mysql_query($requete);
	
?>

<table border="1" width="99%">
	<tr>
		<td>Identifiant</td>
		<td>Nom de l'employé</td>
		<td>Prénom de l'employé</td>
		<td>Date de naissance</td>
		<td>Sexe de l'employé</td>
		<td>Fonction</td>
		<td>Salaire</td>
	</tr>

	<?php while($enreg=mysql_fetch_array($resultat))
	{
		?>
		<tr>
			<td><?php echo $enreg["id"];?></td>
			<td><?php echo $enreg["nom"];?></td>
			<td><?php echo $enreg["prenom"];?></td>
			<td><?php echo $enreg["date_naissance"];?></td>
			<td><?php echo $enreg["sexe"];?></td>
			<td><?php echo $enreg["fonction"];?></td>
			<td><?php echo $enreg["salaire"];?></td>
			<?php
	 		echo "<td><a href='supprime_employe.php?id=".$enreg['id']."'>Supprimer</a></td>";
	 		?>
		</tr>
	<?php	
	} ?>
</table>
<?php
mysql_close();
?>
<br>
<button class="btn btn-outline-warning btn-lg"><a href="modification_employe.html">Modifier</a></button>
</center>
<br><br><br>
<button class="btn btn-outline-light btn-lg"><a href="index_admin.html">Retour au menu principal</a></button>
</body>
</html>