<!DOCTYPE html>
<html>
<head>  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /></head>
<body>
<br> <br> <br> <br> <br> <br> 
<?php
if(isset($erreure)) echo $erreure;

?>

<form method="post" action="ajouter.php">
			<label>Nom</label> <input type="text" name="nom">
			
			
			
			<label>texte</label> <input type="text" name="reve">
<label>commentaire</label> <input type="text" name="commentaire">

			<label>Révé le : </label> <input type="date" name="date">
			
			
<label>Catégorie</label> <input type="text" name="categorie">
<br> 
<input type="submit" value="Ajouter">
		</form>


	

</body>
</html>