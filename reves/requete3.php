<html>

<head>
<title> Requete   </title> 
<meta charset="utf-8">
</head>

<body>
<form method="POST" action="">
<input type="text" name="titre" placeholder="Titre" /><br />
<input type="text" name="description" placeholder="Descritpion" /><br />
<input type="text" name="categorie" placeholder="Catégories" /><br />
<input type="submit" value="ok" />
</form>
<?php
$bdd = new PDO('mysql:host=aunatupma1830400.mysql.db;dbname=aunatupma1830400', 'aunatupma1830400', 'Neptune240984');

if(isset($_POST['titre']) AND isset($_POST['description']) AND isset($_POST['categorie']))
{


$requete = $bdd->prepare("INSERT INTO videos(titre, description, categorie) VALUES(?,?,?)");
$requete->execute(array($_POST['titre'], $_POST['description'], $_POST['categorie']));

?>

<?php
}

?>
</body>

</html>