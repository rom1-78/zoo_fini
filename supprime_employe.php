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

<?php 
mysql_connect("localhost","root","");
mysql_select_db(zoo);
$id=$_GET['id'];
$sql="DELETE FROM personnels WHERE id=$id";
mysql_query($sql);
header('Location:informations_employe.php');
exit;
mysql_close()
?>
<button><a href="informations_employe.php">Information</a></button>
</body>
</html>