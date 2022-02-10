<html>

<head>
<title> Requete   </title> 
<meta charset="utf-8">
</head>

<body>
<form method="GET" action="">
<label>entrer un ID </label>
<input type="texte" name ="id" />

<input type="submit" value="ok" />
</form>
<?php
if(isset($_GET['id']))
{
$bdd = new PDO('mysql:host=aunatupma1830400.mysql.db;dbname=aunatupma1830400', 'aunatupma1830400', 'Neptune240984');

$requete = $bdd->prepare("SELECT * FROM videos WHERE id = :id ");
$requete->execute(array(
'id' => $_GET['id'],

));
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
}
?>
</body>

</html>