
<html>
<head>



</head>

<body>



<?php
// on se connecte à MySQL
$db = mysql_connect('aunatupma1830400.mysql.db', 'aunatupma1830400', 'Neptune240984');

// on sélectionne la base
mysql_select_db('aunatupma1830400',$db);

// on crée la requête SQL
$sql = 'SELECT nom FROM reves';

// on envoie la requête
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

// on fait une boucle qui va faire un tour pour chaque enregistrement
while($data = mysql_fetch_assoc($req))
    {
    // on affiche les informations de l'enregistrement en cours
    echo '<b>'.$data['nom'].' '.$data['reve'].'</b> ('.$data['commentaire'].')';
    
    }

// on ferme la connexion à mysql
mysql_close();
?>
















</body>
 </html>



