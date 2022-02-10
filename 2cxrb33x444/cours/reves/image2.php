<?php 
require("db.php"); 

require("upload_image.php"); 

?>



<!DOCTYPE html>
<html>
<head>
<LINK rel="stylesheet" type="text/css" href="../../../css/tableau.css">
<meta charset="utf-8">

<title>  Image Dans la Base  </title>

<style type="texte/css"> 
sh {display: none}
</style>
</head>
<body>

  

<nav> <button type="button" class="mystyle1"  onclick="self.location.href='form.php'" >
Vers le formulaire

    </button>    </nav>




<div>   Liste enregistrement
<table>
<tr> 
<th> ID </th>
<th> NOM </th>
<th> Info </th>
<th> Photo </th>
<th> Date </th>
<th> Categorie </th>
<th> Commentaire </th>

</tr>
<?php
$query = mysqli_query($conn,"SELECT * FROM tb_image order by categorie ");
while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
{
echo '<tr>   <th>' .$row["id"].'</th>';     '</th>';
echo '   <th>' .$row["nom"].'</th>';     '</th>';
echo '   <th>' .$row["info"].'</th>';     '</th>';
echo '  <th><img src="picture/'.$row["photo"].'" width="250px" height="250px"/></th>';  
echo '   <th>' .$row["date"].'</th>';     '</th>';
echo '   <th>' .$row["categorie"].'</th>';     '</th>';
echo '   <th>' .$row["commentaire"].'</th>';     '</th>';


   '</tr>';

}

?>     </h5>
</table>

  </div> 
</body>
</html>