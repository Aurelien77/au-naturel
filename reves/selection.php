
<html>
<head>



</head>

<body>
<table border ="1">
<tr> 
<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=aunatupma1830400.mysql.db;dbname=aunatupma1830400;charset=utf8', 'aunatupma1830400', 'Neptune240984');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table 
$reponse = $bdd->query('SELECT * FROM reves');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>  <th>
    <strong>nom du rêve </strong> : <?php echo $donnees['nom']; ?><br />   </th>  <th>
    Le texte de ce rêve est  : <?php echo $donnees['reve']; ?>  </th>  <th>
  <br />et il a la catégorie  <?php echo $donnees['categories']; ?> <br /> </th>  <th>
    Le commentaire apposé est <?php echo $donnees['commentaire']; ?>  </th>  <th>   </tr> 
    
   </p>


<?php


}

$reponse->closeCursor(); // Termine le traitement de la requête




 ?>
<table>
</body>
 </html>



