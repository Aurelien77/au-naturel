
<html>
<head>



</head>

<body>


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

?>


<?php
    $Query = $bdd->prepare('SELECT * FROM reves');
    $Query->execute();
    $Reponse = $Query->fetchAll();
    $Query->closeCursor();
     
    var_dump($Reponse); // Array
     
    echo json_encode($Reponse); // String JSON
?>

</body>
 </html>



