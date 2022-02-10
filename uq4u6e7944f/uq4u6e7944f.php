<html>
<head> 
<title> Au-Naturel </title>


<link rel="shortcut icon" href="../images/ams.png">
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


.clignote {
  color:blue;
  animation: clignote 2s linear infinite;
text-shadow: 1px 1px 1px #000;
font-size: 50px;
}
@keyframes clignote {  
  50% { opacity: 0; }
}

</style>

</head>
<body>

<nav>
    


<button type="button" class="mystyle1"  onclick="self.location.href='cours/telechargement.php'" >
Telechargement de cartes

    </button> <button type="button" class="mystyle1"  onclick="self.location.href='cours/consultation.php'" >
Consultation

    </button>
  
</nav> 

<section> 
<link rel ="stylesheet" label="name1" type="text/css" href="../css/racines.css">
<link rel ="stylesheet" label="name1" type="text/css" href="../css/fond.css">

<table>
<tr> 

<th>


<div class="cylon_eye"></div> 

</th>  

<th> 
<br><br>


<div align"center"> <br> <br><span class="titre3"> <h8> Bonjour  <?php
session_start();  

print $_COOKIE['pseudo'];
 
?> </h8>

<br> <br>

 </h3>  
 <h7>"La nature ne juge pas et elle te guideras toujours vers le meilleur de toi-même"
L'histoire de ce site est une invitation à faire appel à toutes ses capacités,
il à été créé dans le but de consulter les cartes en posant des questions écrites et de permettre ainsi l'écriture d'un historique conservable et consultable par les personnes de votre choix.
 </h7></span> 


<br> <br> <br> <br> 



<a href ="cours/consultation.php">

 <span class="clignote"><button type="button" class="mystyle1"  onclick="self.location.href='cours/telechargement.php'" > <h3> Consultation  </h3>  </button> </span></a>   



      </div>



</th>  


<th>  <div class="test"></div>  </th>


</tr>
<tr>  <th colspan ="3">    <div align="center">
<audio controls autoplay>
 
  <source src="../audio/foret.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

</div>  </th>     </tr> 

<tr> <th colspan="3"> 
 <footer> 

<div align="center">
<button class="favorite styled"
        type="button">
   


   <a href="../deconnexion.php"><h3>Se déconnecter</h3></a>   
</button>

</div> 
 </footer>  </th>    </tr>

 </table>
</section>





</body>
</html>