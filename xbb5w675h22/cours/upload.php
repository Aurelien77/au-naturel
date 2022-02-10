<html>

<head>
<link rel="shortcut icon" href="../../images/ams.png">
<meta name="viewport" content="width=100%" heigth="100%", initial-scale="1.0">

<style>
.mystyle1
{

 border: 0;
    line-height: 1;
    padding: 0 10px;
    font-size: 22px;
    text-align: center;
    color: white;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: rgba(106, 106, 220, 50);
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                inset -2px -2px 3px rgba(0, 0, 0, .6);
}

.mystyle1:hover {
    background-color: blue;
}
.mystyle1:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                inset 2px 2px 3px rgba(0, 0, 0, .6);
}



</style>

</head>
<body>

<nav>
    
<button type="button" class="mystyle1"  onclick="self.location.href='telechargement.php'" >
  

Page précédente  </button>


  
</nav> 

   <link rel="stylesheet" style="texte/css" href="../../css/form2.css"> 
<?php
session_start();
 ?>

<nav><a href="telechargement.php"><h8>Revenir à la page upload  &nbsp; &nbsp;&nbsp; &nbsp; </h8> </a> </nav>
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
         echo '<h8>Upload effectué avec succès !</h8>' ; 
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo '<h9>Echec de l\'upload !</h9>';
     }
}
else
{
     echo $erreur;
}
?>  </section>
 <footer> 
<div align="center">


<a href="../../deconnexion.php"><h3>Se déconnecter</h3></a>   </div> 
 </footer>
</body>
</html>