<?php 
require("db.php"); 

require("upload_image.php"); 

?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<title>  PHP Ajouter Image Dans la Base  </title>

<style type="texte/css"> 
sh {display: none}
</style>
</head>
<body>

  
<h2> Ajouter Image Dans la base de Donnée </h2>





<div> Formulaire ajout une Image </div>
<button class="btn btn-info">Affiche</button>

<?php echo $valid ?>
<form method="Post" action="" enctype="multipart/form-data">

<label>Nom </label>

<input type="text" name="txtnom">

<label>info </label>

<input type="text" name="txtinfo">

<br>
<input type="file" name="img" >

<input type="submit" name="btnAjout">

<div>   Liste enregistrement
<table class="table">
<tr> 
<th> ID </th>
<th> NOM </th>
<th> Info </th>
<th> Photo </th>
<th> Action </th>
</tr>
<?php
$query = mysqli_query($conn,"SELECT * FROM tb_image");
while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
{
echo '<tr>   <td>' .$row["id"].'</td>';     '</tr>';
echo '   <td>' .$row["nom"].'</td>';     '</tr>';
echo '   <td>' .$row["info"].'</td>';     '</tr>';
echo '  <td><img src="picture/'.$row["photo"].'" width="50px" height="50px"/></td>';  
echo '  <td><a href="">Supprimer</a> </td>'; 

   '</tr>';

}

?>
</table>

  </div> 
</body>
</html>