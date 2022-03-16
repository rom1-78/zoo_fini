<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title></title>
</head>
<body>
<?php 
mysql_connect("localhost","root","");
mysql_select_db(zoo);
$pseudo=$_GET['pseudo'];
$sql="DELETE FROM animaux WHERE id=$pseudo";
mysql_query($sql);
header('Location:informations_animal.php');
exit;
mysql_close()
?>
<button><a href="informations_animal.php">Information</a></button>
<button><a href="index_employe.html">Retour au menu principal</a></button>
</body>
</html>