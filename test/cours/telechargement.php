
<head>

<meta name="viewport" content="width=100%" heigth="100%", initial-scale="1.0">



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
    
<button type="button" class="mystyle1"  onclick="self.location.href='consultation.php'" >
  

Les models  </button>


  
</nav> 

   <link rel="stylesheet" style="texte/css" href="../../css/form2.css"> 


<nav> 
   <div class="up"><br><br><br> <div align="center" > 



<form method="POST" action="upload.php" enctype="multipart/form-data">   
     <!-- On limite le fichier à 100Ko -->


     <input type="hidden" name="MAX_FILE_SIZE" value="1000000">  



    <input type="file" name="avatar"> &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="submit" name="envoyer" value="Envoyer le fichier">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="telechargement.php"> <input type="button" value="Rafraichir la page"> </a>
  </form>  


<br><br><br> </div>  </nav> 


<section> 
<div align ="center" >

<table border="2">

   <tr>  
<th><img src="../../images2/insecte.gif" width="150" height="150">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <img src="../../images2/insecte5.gif" width="150" height="150">
 &nbsp;&nbsp; <img src="../../images2/insecte10.gif" width="150" height="150">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
  <img src="../../images2/insecte6.gif" width="150" height="150"> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
 &nbsp;&nbsp; &nbsp;&nbsp;<img src="../../images2/insecte9.gif" width="150" height="150">
<h3>Vous pouvez noter le nom des fichiers à supprimer dans le cadre  gauche puis cliquer sur le bouton de suppression. <br>
Le nom des fichiers peuvent être copier et coller pour plus de faciliter. <br>
en survollant les images leurs noms apparaitront.


</h3></th>
<th><h2>le formulaire</h2> <img src="../../images2/insecte3.gif" width="80" height="80">
  
  <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
  <textarea name="avirer" value="" rows="8" >Effacer ce texte pour noter, dans ce cadre, les fichiers à supprimer</textarea>
  
  <div align="bottom"> <input type="submit" value="Supprimer"> </div>
  </form>  </th>
<th>  </tr>  <tr> <th>

<?php
  //zone à afficher si le formulaire a été saisi
  if(isset($_POST['avirer']) && !empty($_POST['avirer'])) { //isset s'assure que le champ a été soumis, et !empty que le champ n'est pas vide
  ?>
  



  <h1>le résultat</h1>
  
  <?php	
    //On récupère la liste des fichiers à effacer
    $liste_avirer=explode('\n',$_POST['avirer']); 
//on créé un tableau contenant la liste des fichiers à effacer (le délimieur est le retour à la ligne ("\n") à remplacer par exemple par "," si on souhaite séparer les fichiers à supprimer par des virgules
    
    //on boucle les éléments du tableau
    foreach ($liste_avirer as $item) {
      $item=trim($item); // on vire les éventuels espaces avant ou à la fin du nom du fichier
      
      $nom_dossier='images/'; //mettre ici le chemin du dossier exemple 'mon_dossier/', on ne met rien si le script se trouve dans le même répertoire que ce script comme ici
      
      $nom_fichier_avirer=$nom_dossier.$item;
      
      //on regarde si le fichier à supprimer existe bel et bien
      if(file_exists($nom_fichier_avirer)) {
        $resultat=unlink($nom_fichier_avirer);// si c'est le cas on supprime
        echo ($resultat)?'<b><h3>'.$nom_fichier_avirer.'</b> a bien été supprimé &nbsp; <a href="telechargement.php"> <h3> Rafraichir </h3> </a><br />':'<b>'.$nom_fichier_avirer.'</b> n\'a pas pu être supprimé. Une erreur s\'est produite. &nbsp; <a href="telechargement.php"><h3>Rafraichir </h3></a></h3><br />';
      } else {
        echo '<b><h3>'.$nom_fichier_avirer.'</b> n\'a pas pu être supprimé. Le(s) fichier(s) n\'existe pas.</h3>&nbsp; <a href="telechargement.php"><h3> Rafraichir </h3></a> <br />';;
      }
    }
    
  } else { // si le formulaire n'a pas été saisi, on l'affiche
  ?>
  

</th>


</tr>  
<tr>
 
<th colspan=2>
<h3>
<?php
function AffDir($rep)
{
  $dir = opendir($rep);
  while ($File = readdir($dir))
  {
    if($File != "." && $File != "..")
    {
      echo $File."&nbsp; &nbsp;";
    }
  }
  closedir($dir);
}

AffDir("images/");   
?>    </h2>
  <?php

//commentaire

  }
  ?>  


</div> 

</th>  <th>
<br> 

<h3>
<br>
  
<br> <br> <br>    </h2>     
</th>
 </tr>

<tr>
<th colspan=2>
<div>  
<?php
// url du fichier qui contient les images
$urlphoto = "images/";

// nom du répertoire qui contient les images
$nomRepertoire = "images/";
if (is_dir($nomRepertoire))
   {
   $dossier = opendir($nomRepertoire);
   while ($Fichier = readdir($dossier))
       {
      if ($Fichier != "." AND $Fichier != ".." AND (stristr($Fichier,'.gif') OR stristr($Fichier,'.jpg') OR stristr($Fichier,'.png') OR stristr($Fichier,'.bmp')))
        {
        // Hauteur de toutes les images
        $h_vign = "120";
        $taille = getimagesize($nomRepertoire."/".$Fichier);
        $reduc  = floor(($h_vign*100)/($taille[1]));
        $l_vign = floor(($taille[0]*$reduc)/100);
      
          echo '<a target="_blank" href="', $urlphoto, '/',$Fichier, '">';
          echo '<img src="', $urlphoto, '/',$Fichier, '" ';
          echo "width='$l_vign' height='$h_vign'>";
          echo "</a>&nbsp;";
          }
        }    
   closedir($dossier);
   }else{
   echo' Le répertoire spécifié n\'existe pas';
   }
?> 


 </div>  </th>
</tr>
</table>
  </section>
 <footer> 

<div align="center">
<button class="favorite styled"
        type="button">  
   


   <a href="../../deconnexion.php"><h3>Se déconnecter</h3></a>   
</button>

</div> 
 </footer>
</body>
</html>