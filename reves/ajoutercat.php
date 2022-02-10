<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

</html>

<?php
//recupération des infos
$cat = $_REQUEST['categories'];


//Connexion à la BD
$conn = mysqli_connect('aunatupma1830400.mysql.db','aunatupma1830400','Neptune240984','aunatupma1830400');

//La réquête
$req = "insert into reves (categories) values('$cat')";

$resultat = mysqli_query($conn,$req);
//Pour se rassurer si la requête est bien exécutée
if($resultat == TRUE){
        echo "Insertion réussie";
}else{
        echo "Erreur d'insertion";
}
?>













