<html>

<head>
<title> Requete   </title> 
<meta charset="utf-8">
 <LINK rel="stylesheet" type="text/css" href="../../../css/tableau.css">
</head>

<body>

<?php
session_start();  ?>
  
<nav> <button type="button" class="mystyle1"  onclick="self.location.href='../../tf35r74i67r.php'" >
Accueil

    </button> <button type="button" class="mystyle1"  onclick="self.location.href='image.php'" >
Rêves classés par images

    </button>

<button type="button" class="mystyle1"  onclick="self.location.href='form3.php'" >
Recherche par mots 

    </button>






</nav>
<div align="center">
<form method="GET" action="">
<label><h4>Entrer un numéro de rêve </h4></label>
<input type="texte" name ="id" />

<input type="submit" value="ok" />
</form>
<?php
if(isset($_GET['id']))
{
$bdd = new PDO('mysql:host=aunatupma1830400.mysql.db;dbname=aunatupma1830400', 'aunatupma1830400', 'Neptune240984');

$requete = $bdd->prepare("SELECT * FROM tb_image WHERE id = :id ");
$requete->execute(array(
'id' => $_GET['id'],

));
?>
<table border="1">
<?php
while($resultat = $requete ->fetch())
{
?>
<tr>
<td><h5>Numéro :<?php echo $resultat['id']; ?></h5></td>
<td><h5>Nom :<?php echo $resultat['nom']; ?></h5></td>
<td><h5>Catégorie : <?php echo $resultat['categorie']; ?></h5></td>

</tr>
<tr>
<td><h5> Date :<?php echo $resultat['date']; ?></h5></td>

<td><h5>Description :<?php echo $resultat['info']; ?></h5></td>

<td><h5>Commentaire :<?php echo $resultat['commentaire']; ?></h5></td>

</tr>
<?php
}
}
?>


</div>


<table>  <tr> <th>   <h4> Modification d'un rêve  </h4>
<form method="POST" action="">
<input type="text" name="id" placeholder="ID  à modifier" /> <br />
<input type="text" name="nom" placeholder="nom" /><br />
<input type="text" name="info" placeholder="Description" /><br />
<input type="text" name="commentaire" placeholder="commentaire" /><br />
<input type="date" name="date" placeholder="date" /><br />
<input type="text" name="categorie" placeholder="Catégories" /><br />
<input type="submit" value="ok" />
</form>
<?php
$bdd = new PDO('mysql:host=aunatupma1830400.mysql.db;dbname=aunatupma1830400', 'aunatupma1830400', 'Neptune240984');

if(isset($_POST['nom']) AND isset($_POST['info']) AND isset($_POST['commentaire']) AND isset($_POST['date']) AND isset($_POST['categorie']) AND isset($_POST['id']))
{


$requete = $bdd->prepare("UPDATE 
tb_image SET nom = ?, info = ?, commentaire = ?, date = ?, categorie = ? WHERE id = ?");
$requete->execute(array($_POST['nom'], $_POST['info'], $_POST['commentaire'], $_POST['date'], $_POST['categorie'], $_POST['id']));


?>

<?php
}

?>

</th> <th> <h4> Entrer un nouveau rêve  </h4>
<form method="POST" action="">
<input type="text" name="nom" placeholder="Nom" /><br />
<input type="text" name="info" placeholder="Descritpion" /><br />
<input type="text" name="commentaire" placeholder="Commentaire" /><br />
<input type="date" name="date" placeholder="Date" /><br />
<input type="text" name="categorie" placeholder="Catégories" /><br />
<input type="submit" value="ok" />
</form>
<?php
$bdd = new PDO('mysql:host=aunatupma1830400.mysql.db;dbname=aunatupma1830400', 'aunatupma1830400', 'Neptune240984');

if(isset($_POST['nom']) AND isset($_POST['info']) AND isset($_POST['commentaire']) AND isset($_POST['date']) AND isset($_POST['categorie']))
{


$requete = $bdd->prepare("INSERT INTO tb_image(nom, info, commentaire, date, categorie) VALUES(?,?,?,?,?)");
$requete->execute(array($_POST['nom'], $_POST['info'], $_POST['commentaire'], $_POST['date'], $_POST['categorie']));

?>

<?php
}

?>
</th> </tr>

<tr> <th colspan ="2">  <form method="GET" action="">
<label><h4>Entrer une catégorie </h4></label>
<input type="texte" name ="categorie" placeholder="Entrer une catégorie"/>

<input type="submit" value="ok" />
</form>
<?php
if(isset($_GET['categorie']))
{
$bdd = new PDO('mysql:host=aunatupma1830400.mysql.db;dbname=aunatupma1830400', 'aunatupma1830400', 'Neptune240984');

$requete = $bdd->prepare("SELECT * FROM tb_image WHERE categorie = :categorie ");
$requete->execute(array(
'categorie' => $_GET['categorie'],

));
?>
</th> <th colspan="2">
<?php
while($resultat = $requete ->fetch())
{
?> 
<tr>
<td><h5>Le numéro du rêve :<?php echo $resultat['id']; ?></h5></td>
<td><h5>Le nom :<?php echo $resultat['nom']; ?></h5></td>
<td><h5>La déscritpion : <?php echo $resultat['categorie']; ?></h5></td>
</tr>
<tr>
<td> </td>
<td><h5>La date :<?php echo $resultat['date']; ?></h5></td>
<td><h5>Le rêve : <?php echo $resultat['info']; ?></h5></td>
<td><h5>Commentaire : <?php echo $resultat['commentaire']; ?></h5></td>
</tr>
<?php
}
}
?>  
 <th>
</tr>
<tr>    
<?php

$bdd = new PDO('mysql:host=aunatupma1830400.mysql.db;dbname=aunatupma1830400', 'aunatupma1830400', 'Neptune240984');
$requete = $bdd->query("SELECT categorie FROM tb_image GROUP BY categorie" );

?>  </table>
<table border="1">
<?php
while($resultat = $requete ->fetch())
{
?>

<th><h5><?php echo $resultat['categorie']; ?></h5></th>





<?php
}
?>

</table>

<footer>   <div align="center">
<button class="favorite styled"
        type="button">
   


   <a href="../../../deconnexion.php"><h3>Se déconnecter</h3></a>   
</button>

</div> 
</footer>
</body>

</html>