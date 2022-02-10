
<HEAD>
<link rel="shortcut icon" href="../../images/ams.png">
<meta name="viewport" content="width=100%" heigth="100%", initial-scale="1.0">


<title> Au-Naturel </title>

<style>
.mystyle1
{

 border: 2;
    line-height: 2;
    padding: 0 10px;
    font-size: 22px;
    text-align: center;
 font-family: "Times New Roman";
    color: white;
    text-shadow: 1px 1px 1px #000;
    border-radius: 20px;
    background-color: #7b38d8;
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
<link rel="stylesheet" type="text/css" href="../../css/fond.css">   
</head>
<body>

<nav>
    
<button type="button" class="mystyle1"  onclick="self.location.href='consultation.php'" >
  

Page des models </button>


  
</nav> 
 




<table border="0">
<tr> 
<th colspan="6">
<h2> La question :  <?php echo htmlspecialchars($_POST['nom']); ?>
   </h2></th>
 </tr>

 <tr>  <th>

<div id="container">
<script type="text/javascript">

var imgA = document.createElement("img"); 
var randomCO = Math.floor((Math.random() * 21) + 1); // random entre 1 et 200
imgA.src = "images/" + randomCO + ".jpg" ;
imgA.classList.add('maclasse');    
document.getElementById('container').appendChild(imgA).style.height = "450px"; 
document.getElementById("container").appendChild(imgA).style.width = "300px";  

</script>  </div>  </th>

 <th>   <div id="container1">
<script type="text/javascript">  
 

var imgB = document.createElement("img");
var randomFond = Math.floor((Math.random() *21) + 1); // random entre 1 et 200
imgB.src = "images/" + randomFond + ".jpg";
document.getElementById('container1').appendChild(imgB).style.height = "450px"; 
document.getElementById("container1").appendChild(imgB).style.width = "300px";  

</script>  </div>  </th>


 
<th>  <div id="container2">
<script type="text/javascript">  


var imgc = document.createElement("img");
var randomFond = Math.floor((Math.random() *21) + 1); // random entre 1 et 200
imgc.src = "images/" + randomFond + ".jpg";
document.getElementById('container2').appendChild(imgC).style.height = "450px"; 
document.getElementById("container2").appendChild(imgC).style.width = "300px";  

</script>  </div>  </th> 

 <th> 
<div id="container3">
<script type="text/javascript"> 

var imgd = document.createElement("img");
var randomFond = Math.floor((Math.random() *21) + 1); // random entre 1 et 200
imgd.src = "images/" + randomFond + ".jpg";
document.getElementById('container3').appendChild(imgD).style.height = "450px"; 
document.getElementById("container3").appendChild(imgD).style.width = "300px";  
 
</script>  </div>  </th>  <th> 
<div id="container4">
<script type="text/javascript"> 

var imge = document.createElement("img");
var randomFond = Math.floor((Math.random() *21) + 1); // random entre 1 et 200
imge.src = "images/" + randomFond + ".jpg";
document.getElementById('container4').appendChild(imgE).style.height = "450px"; 
document.getElementById("container4").appendChild(imgE).style.width = "300px";  

</script>  </div>  </th> 
 <th> 
<div id="container5">
<script type="text/javascript"> 
var imgf = document.createElement("img");
var randomFond = Math.floor((Math.random() *21) + 1); // random entre 1 et 200
imgf.src = "images/" + randomFond + ".jpg";
document.getElementById('container5').appendChild(imgF).style.height = "450px"; 
document.getElementById("container5").appendChild(imgF).style.width = "300px";  

   
</script>  </div> </th>

  
<footer>


</tr>

<tr>  
<th colspan="6"><font color ="white"></font>
<a href="model7.php" target="blank"><img src="../../images/bouton1.gif"width=" 160px" height="270"></a>
 <h3>Nouveau tirage</h3>


</th>

</tr>

 <tr>  <th colspan="6">  
<audio controls autoplay>
 
  <source src="../../audio/foret.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio> 
<div align="center">
<button class="favorite styled"
        type="button">
   


   <a href="../../deconnexion.php"><h3>Se déconnecter</h3></a>   
</button>



   </th>  </tr>

</table>





 </footer>

<body>  </html>
