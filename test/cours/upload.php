<html>

<head>
</head>
<body>
<?php
session_start();
 ?>

<nav><a href="telechargement.php"><h1>Revenir à la page upload  &nbsp; &nbsp;&nbsp; &nbsp; </h1> </a> </nav>
<section>  <link rel="stylesheet" style="texte/css" href="form.css"> 
<?php
$dossier = 'images/';
$fichier = basename($_FILES['avatar']['name']);
$taille_maxi = 1000000;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['avatar']['name'], '.'); 
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
}
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
         echo '<h1>Upload effectué avec succès !</h1>' ; 
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}
else
{
     echo $erreur;
}
?>  </section>
 <footer> 
<div align="center">


<a href="deconnexion.php"><h3>Se déconnecter</h3></a>   </div> 
 </footer>
</body>
</html>