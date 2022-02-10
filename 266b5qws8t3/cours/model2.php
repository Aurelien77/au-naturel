
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
 




<table>
<tr> <th colspan="4">
<h8> La question :  <?php echo htmlspecialchars($_POST['nom']); ?>
   </h8></th>
 </tr>
 <tr>  <th> 

<div id="container">   </div> 
<script type="text/javascript">

var imgA = document.createElement("img"); 
var randomCO = Math.floor((Math.random() * 200) + 1); // random entre 1 et 200
imgA.src = "../../oracle/" + randomCO + ".jpg" ;
imgA.classList.add('maclasse'); 
document.getElementById('container').appendChild(imgA).style.height = "380px"; 
document.getElementById("container").appendChild(imgA).style.width = "250px"; 
</script> 
</th>   <th>


<div id="container1">   </div>
<script type="text/javascript">
var imgB = document.createElement("img");
var randomFond = Math.floor((Math.random() *200) + 1); // random entre 1 et 200
imgB.src = "../../oracle/" + randomFond + ".jpg";
document.getElementById('container1').appendChild(imgB).style.height = "380px"; 
document.getElementById("container1").appendChild(imgB).style.width = "250px";
</script> </th> <th>

<div id="container2">   </div>
<script type="text/javascript">
var imgc = document.createElement("img");
var randomFond = Math.floor((Math.random() *200) + 1); // random entre 1 et 200
imgc.src = "../../oracle/" + randomFond + ".jpg";
document.getElementById('container2').appendChild(imgc).style.height = "380px"; 
document.getElementById("container2").appendChild(imgc).style.width = "250px";
</script> </th> <th>

<div id="container3">   </div>
<script type="text/javascript">
var imgd = document.createElement("img");
var randomFond = Math.floor((Math.random() *200) + 1); // random entre 1 et 200
imgd.src = "../../oracle/" + randomFond + ".jpg";
document.getElementById('container3').appendChild(imgd).style.height = "380px"; 
document.getElementById("container3").appendChild(imgd).style.width = "250px";
</script> </th> <th>

<div id="container4">   </div>
<script type="text/javascript">
var imge = document.createElement("img");
var randomFond = Math.floor((Math.random() *200) + 1); // random entre 1 et 200
imge.src = "../../oracle/" + randomFond + ".jpg";
document.getElementById('container4').appendChild(imge).style.height = "380px"; 
document.getElementById("container4").appendChild(imge).style.width = "250px";
</script> </th> <th>

<div id="container5">   </div>
<script type="text/javascript">

var imgf = document.createElement("img");
var randomFond = Math.floor((Math.random() *200) + 1); // random entre 1 et 200
imgf.src = "../../oracle/" + randomFond + ".jpg";
ocument.getElementById('container5').appendChild(imgf).style.height = "380px"; 
document.getElementById("container5").appendChild(imgf).style.width = "250px";
   </script> </th> </tr>

<tr> <th colspan="5">

<font color ="white"></font>
<a href="question2.php" target="blank"><img src="../../images/bouton1.gif"width=" 160px" height="270"></a>
 <br> <h7>Nouveau tirage</h7>


</th>

</tr> 
 <footer> 
<tr>  <th colspan="5"> 
 
<audio controls autoplay>
 <source src="../../audio/4.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio> 
</th> </tr> 

<tr> <th colspan="5"> 
<button class="favorite styled"
        type="button">  
   
 <a href="../../deconnexion.php"><h3>Se deconnecter</h3></a>
   
</button>






   </th>  </tr>

</table> </footer>

</body>  </html>