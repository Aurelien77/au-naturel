<html>
<head><meta http-equiv="Content-Type"
content="text/html; charset=iso-8859-1">
 <STYLE type="text/css">
  <!--

  table,
td {
    border: 3px solid #333;

#hg, #bg, #bd 
  background-repeat:no-repeat;width:1500px;height:300px;
  
background-image:url(etoile2.jpg);
  
  }
  
  

  -->
  </STYLE>
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

<table> <div align="center">
<h7>La question :  <?php echo htmlspecialchars($_POST['nom']); ?></h7>  </div>
   
        <tr>
            <th colspan="3"> 
<div id="container">

<script type="text/javascript">



var imgA = document.createElement("img"); 
var randomCO = Math.floor((Math.random() * 21) + 1); // random entre 1 et 200
imgA.src = "../../tarots/" + randomCO + ".jpg" ;
imgA.classList.add('maclasse'); 
document.getElementById('container').appendChild(imgA);  


 </script>  </div>

        </tr>
 
 

        <tr> 

            <th>
 <div id="container4">



 <script type="text/javascript"> 

var imgD = document.createElement("img"); 
var randomCO = Math.floor((Math.random() * 21) + 1); // random entre 1 et 200
imgD.src = "../../tarots/" + randomCO + ".jpg";

imgD.classList.add('maclasse'); 
document.getElementById('container4').appendChild(imgD);     </script> 

</div>
</th>



           <th><div id="container2"> <script type="text/javascript"> 

var imgB = document.createElement("img"); 
var randomCO = Math.floor((Math.random() * 21) + 1); // random entre 1 et 200
imgB.src = "../../tarots/" + randomCO + ".jpg";
imgB.classList.add('maclasse'); 
document.getElementById('container2').appendChild(imgB);     </script> </div>
</th> 
			<th><div id="container3"> <script type="text/javascript"> 

var imgC = document.createElement("img"); 
var randomCO = Math.floor((Math.random() * 21) + 1); // random entre 1 et 200
imgC.src = "../../tarots/" + randomCO + ".jpg" ;
imgC.classList.add('maclasse'); 
document.getElementById('container3').appendChild(imgC);     </script> </div></th>
        </tr>
		<tr>
            <th colspan="3"><div id="container5"> <script type="text/javascript"> 

var imgE = document.createElement("img"); 
var randomCO = Math.floor((Math.random() * 21) + 1); // random entre 1 et 200
imgE.src = "../../tarots/" + randomCO + ".jpg" ;
imgE.classList.add('maclasse'); 
document.getElementById('container5').appendChild(imgE);     </script> </div></th>
        </tr>        

 
</section>
<tr> <th colspan="3"> 
 <footer> 
<link rel="stylesheet" type="text/css" href="../fond.css">  
<div align="center">
<button class="favorite styled"
        type="button">  
   


   <a href="../../deconnexion.php"><h3>Se déconnecter</h3></a>   
</button>

</div> 
 </footer>  </th>    </tr>

 </table>






</body>
</html>


    
