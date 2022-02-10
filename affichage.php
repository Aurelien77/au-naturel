



<?php
try
{
  $bdd = new PDO('mysql:host=aunatupma1830400.mysql.db;dbname=aunatupma1830400', 'aunatupma1830400', 'Neptune240984');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT avatar FROM membres WHERE id=11');
while ($donnees = $reponse->fetch())
{
  echo   '<img src="membres/avatars/'.$donnees['avatar'].'" />';
}
$reponse->closeCursor();
?>






 
