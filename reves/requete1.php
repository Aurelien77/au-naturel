<html>

<head>
<title> Requete   </title> 
<meta charset="utf-8">
</head>

<body>
<form method="GET" action="">
<select name="categorie">
<option value="tuto">Tutoriels</option>
<option value="creation">Création</option>


<option value="Null">Autre</option>
</select>
<select name="souscategorie">
<option>CSS</option>
<option>HTML</option>

<option>PHP</option>
</select>
<input type="submit" value="ok" />
</form>
<?php

$bdd = new PDO('mysql:host=aunatupma1830400.mysql.db;dbname=aunatupma1830400', 'aunatupma1830400', 'Neptune240984');

$requete = $bdd->prepare("SELECT * FROM videos WHERE categorie = ? AND souscategorie = ? ORDER BY id ");
$requete->execute(array($_GET['categorie'],$_GET['souscategorie']));
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