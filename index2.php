<html>


<head>
<link rel="shortcut icon" href="images/ams.png">
<meta name="viewport" content="width=100%" heigth="100%", initial-scale="1.0">
</head>

<body>






<title> Au-Naturel </title>

<table>
<tr>
<th>


<div class="ma_div" >     

<Link rel= "Stylesheet" href= "racines2.css" /> 

   
  <p>
  <br/><br/>
    
    <button onclick="afficher()"><img src="images/rond3.gif"width="250" height="230"> </button>
  <p>
  <p>
  <br/><br/>
    <button onclick="cacher()"><img src="images/racines6.jpg"width="500" height="480"><h1>Bienvenue</h1></button>
     
  
</div>






</th>

<th>  <div align"center">
<?php
session_start();
 
$bdd = new PDO('mysql:host=aunatupma1830400.mysql.db;dbname=aunatupma1830400', 'aunatupma1830400', 'Neptune240984');
 
if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: profiltest2.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<br><br><br><br><br><br>
   <link rel="stylesheet" href="bouton.css">
      
         <h2></h2>
         <br /><br />
         <form method="POST" action="">
            <input type="email" name="mailconnect" placeholder="Mail" />
            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter !" />
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
		 
      </div>
  
<br>
<a href="inscription.php"> Pour s'inscrire <a/><br>
<img src ="images/pierre3.gif"width="50" height="50">




<th>







<div class="ma_div2" >  
<Link rel= "Stylesheet" href= "racines.css" /> 
  <p>
  <br/><br/>
    
    <button onclick="afficher()"><img src="images/rond2.gif"width="330" height="200"> </button>
  <p>
  <p>
  <br/><br/>
    <button onclick="cacher()"><img src="images/racines10.jpg"width="500" height="480"><h1>Donnes une parole à la nature</h1></button>
     
 
</div>




<script>



function afficher() {
  let truc_a_gauche = document.querySelector('.ma_div');
 let truc_a_droite = document.querySelector('.ma_div2');
  truc_a_gauche.classList.add('ma_div_affiche');
 truc_a_droite.classList.add('ma_div_affiche2');
  truc_a_gauche.classList.remove('ma_div_cache');
 truc_a_droite.classList.remove('ma_div_cache2');
}
function cacher() {
  let truc_a_gauche  = document.querySelector('.ma_div');
  let truc_a_droite = document.querySelector('.ma_div2');
  truc_a_gauche.classList.remove('ma_div_affiche');
  truc_a_droite.classList.remove('ma_div_affiche2');
  truc_a_gauche.classList.add('ma_div_cache');
truc_a_droite.classList.add('ma_div_cache2');
}
window.onload = () => setTimeout(afficher, 400,);

</script>


   </th>
</tr>
</table>


 <footer> 
<div align="center">
<audio controls autoplay>
 
  <source src="audio/9.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
</div>
</audio>
 </footer>

</body>
</html>

