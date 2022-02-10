 <html>
     <form method="POST" action=""> 
     Rechercher un mot : <input type="text" name="recherche">
     <input type="SUBMIT" value="Search!"> 
     </form>
     </html>

     <?php

    $db_server = 'aunatupma1830400.mysql.db'; // Adresse du serveur MySQL
    $db_name = 'aunatupma1830400';            // Nom de la base de données
    $db_user_login = 'aunatupma1830400';  // Nom de l'utilisateur
    $db_user_pass = 'Neptune240984';       // Mot de passe de l'utilisateur

    // Ouvre une connexion au serveur MySQL
    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


     // Récupère la recherche
     $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

     // la requete mysql
     $q = $conn->query(
     "SELECT nom, info FROM tb_image
      WHERE nom LIKE '%$recherche%'
      OR info LIKE '%$recherche%'
      ");

     // affichage du résultat
     while( $r = mysqli_fetch_array($q)){
     echo 'Résultat de la recherche: <br />'.$r['nom'].', '.$r['info'].' <br /><br />'
;
     }
?>










</html>