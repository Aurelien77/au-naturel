<!DOCTYPE html>
<html>
<body>
<br> <br> <br> <br> <br> <br> 
<?php
if(isset($erreure)) echo $erreure;

?><br> <br> <br> <br> <br> <br> 

<form method="post" action="ajoutercat.php">
			<label>Nouvelles Catégories </label> <input type="text" name="categories">
			
			<br> <br> <br> 
			
		=> 	Voici la liste des catégories actuellement disponibles : 


		<input type="submit" value="Ajouter">
		</form>

</body>
</html>