<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</html>

<?php
//recupération des infos
$nom = $_REQUEST['nom'];
$categories = $_REQUEST['categorie'];
$reve = $_REQUEST['reve'];
$commentaire = $_REQUEST['commentaire'];
$date = $_REQUEST['date'];

$nom = addslashes($nom);
$categories = addslashes($categories);
$reve = addslashes($reve);
$commentaire = addslashes($commentaire);
$date = addslashes($date);


//Connexion à la BD
$conn = mysqli_connect('aunatupma1830400.mysql.db','aunatupma1830400','Neptune240984','aunatupma1830400');

//La réquête
$req = "insert into reves (nom,reve,commentaire,date,categories) values('$nom','$reve','$commentaire','$date','$categories')";

$resultat = mysqli_query($conn,$req);

//Pour se rassurer si la requête est bien exécutée
if($resultat == TRUE){
        echo "Insertion réussie";
}else{
        echo "Erreur d'insertion";
}
?>













