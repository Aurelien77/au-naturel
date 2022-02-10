

<html>

<head>
<title> Requete   </title> 
<meta charset="utf-8">
 <LINK rel="stylesheet" type="text/css" href="../../../css/tableau.css">
</head>

<body>

<?php
session_start();  ?>
  
<nav> <button type="button" class="mystyle1"  onclick="self.location.href='form.php'" >
Retour Formulaire

    </button> 







</nav>
<?php
     
    // Connexion à la base donnée
     
    $db_server = 'aunatupma1830400.mysql.db'; // Adresse du serveur MySQL
    $db_name = 'aunatupma1830400';            // Nom de la base de données
    $db_user_login = 'aunatupma1830400';  // Nom de l'utilisateur
    $db_user_pass = 'Neptune240984';       // Mot de passe de l'utilisateur

    // Ouvre une connexion au serveur MySQL
    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


    if ( isset($_POST['requete']) )
    $requete = htmlentities($conn->real_escape_string($_POST['requete']));


    if (!empty($requete))
    {
        $req = "SELECT * FROM tb_image2 WHERE info LIKE '%$requete%'"; 
        $exec = $conn->query($req);                            
// exécuter la requête
        $nb_resultats = $exec->num_rows;              // compter les résultats


    if($nb_resultats != 0) 
    {
       echo '<center>';   
       echo '
           <form action="" method="Post">
           <input type="text" name="requete" size="60px">
           <input type="submit" value="Ok">
           </form>';
      echo '</center>';
      echo '<font color="blue">Résultat de votre recherche </font><br/>
            <font size="2px">'.$nb_resultats.'</font>';


    if($nb_resultats > 1)
    {
        echo ' <font size="2px" color="red">résultats</font> ';
    }
        else
        {
            echo ' <font size="2px" color="red">résultats trouvé</font>  ';
        } 

       echo  '<font size="2px">dans notre base de données :</font><br/><br/>';



    while($donnees = mysqli_fetch_array($exec))
    {
    ?>

    <?php
          
          echo '<span>'; 
          echo '<font size="2px">'.$donnees['nom'].'</font><br/>';
          echo  '<font size="2px">'.$donnees['info'].'</font><br/>';
          echo '<font size="2px">'.$donnees['date'].'</font><br/>';
          echo '</span>';
    ?>

    <?php
    } // fin de la boucle
    ?>


    <?php
    }


    else {
        echo '<center>';   
        echo '
           <form action="" method="Post">
           <input type="text" name="requete" size="60px">
           <input type="submit" value="Ok">
           </form>';
        echo '</center>';
        echo '<h5>Pas de résultats</h3>';
        echo '<pre>Nous n avons trouver aucun résultats pour votre requête
              <font color="blue">' .$_POST['requete'].'</font></pre>';
      
     }
    }

    else
    { 


     echo '<center>';   
     echo '
           <form action="" method="Post">
           <input type="text" name="requete" size="60px">
           <input type="submit" value="Ok">
           </form>';
     echo '</center>';      

    }
?>
</body>
</html>