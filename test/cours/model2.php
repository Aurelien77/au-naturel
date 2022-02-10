
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
<h2> La question :  <?php echo htmlspecialchars($_POST['nom']); ?>
   </h2></th>
 </tr>
 <tr>  <th colspan="4">

<div id="container"></div> 
<script type="text/javascript">

var imgA = document.createElement("img"); 
var randomCO = Math.floor((Math.random() * 200) + 1); // random entre 1 et 200
imgA.src = "../../oracle/" + randomCO + ".jpg" ;
imgA.classList.add('maclasse'); 

var imgB = document.createElement("img");
var randomFond = Math.floor((Math.random() *200) + 1); // random entre 1 et 200
imgB.src = "../../oracle/" + randomFond + ".jpg";


var imgc = document.createElement("img");
var randomFond = Math.floor((Math.random() *200) + 1); // random entre 1 et 200
imgc.src = "../../oracle/" + randomFond + ".jpg";

var imgd = document.createElement("img");
var randomFond = Math.floor((Math.random() *200) + 1); // random entre 1 et 200
imgd.src = "../../oracle/" + randomFond + ".jpg";

var imge = document.createElement("img");
var randomFond = Math.floor((Math.random() *200) + 1); // random entre 1 et 200
imge.src = "../../oracle/" + randomFond + ".jpg";

var imgf = document.createElement("img");
var randomFond = Math.floor((Math.random() *200) + 1); // random entre 1 et 200
imgf.src = "../../oracle/" + randomFond + ".jpg";
   

document.getElementById('container').appendChild(imgA); 
document.getElementById('container').appendChild(imgB);  
document.getElementById('container').appendChild(imgc);   
document.getElementById('container').appendChild(imgd);
document.getElementById('container').appendChild(imge); 

   
</script>   </th>
</tr>
<div align="center"> 
<tr>  
<th><font color ="white"></font>
<a href="question2.php" target="blank"><img src="../../images/bouton1.gif"width=" 160px" height="270"></a>
 <h3>Nouveau tirage</h3>




</tr> <tr>  <th colspan="4">  
<audio controls autoplay>
 
  <source src="../../audio/4.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio> </th> </tr> <tr> <th>
 <footer> 

<div align="center">
<button class="favorite styled"
        type="button">  
   


   <a href="../../deconnexion.php"><h3>Se deconnecter</h3></a>   
</button>

</div> 
 </footer>



   </th>  </tr>

</table>

</body>  </html>