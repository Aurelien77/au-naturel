<html>

<head>
<title> Requete   </title> 
<meta charset="utf-8">
</head>

<body>
<?php

$bdd = new PDO('mysql:host=aunatupma1830400.mysql.db;dbname=aunatupma1830400', 'aunatupma1830400', 'Neptune240984');
$requete = $bdd->query("SELECT * FROM videos WHERE categorie = 'Tuto' ORDER BY id ");

?>
<table border="1">
<?php
while($resultat = $requete ->fetch())
{
?>
<tr>
<td><?php echo $resultat['id']; ?></td>
<td><?php echo $resultat['titre']; ?></td>
</tr>
<tr>
<td> </td>
<td><?php echo $resultat['description']; ?></td>
</tr>
<?php
}
?>
</body>

</html>