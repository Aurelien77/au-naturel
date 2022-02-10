<html>

<head>
<title> Requete   </title> 
<meta charset="utf-8">
 <LINK rel="stylesheet" type="text/css" href="../../../css/tableau.css">
</head>

<body>
<nav> <button type="button" class="mystyle1"  onclick="self.location.href='../../9374ru82eti.php'" >
Accueil

    </button> <button type="button" class="mystyle1"  onclick="self.location.href='image.php'" >
Rêves classés par images

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
<td><h4>Numéro :<?php echo $resultat['id']; ?></h4></td>
<td><h4>Nom :<?php echo $resultat['nom']; ?></h4></td>
<td><h4>Catégorie : <?php echo $resultat['categorie']; ?></h4></td>

</tr>
<tr>
<td> <h4>Date :<?php echo $resultat['date']; ?></h4></td>

<td><h4>Description :<?php echo $resultat['info']; ?></h4></td>

<td><h4>Commentaire :<?php echo $resultat['commentaire']; ?></h4></td>

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
<input type="text" name="photo" placeholder="image" /><br />
<input type="submit" value="ok" />
</form>
<?php
$bdd = new PDO('mysql:host=aunatupma1830400.mysql.db;dbname=aunatupma1830400', 'aunatupma1830400', 'Neptune240984');

if(isset($_POST['nom']) AND isset($_POST['info']) AND isset($_POST['commentaire']) AND isset($_POST['date']) AND isset($_POST['categorie']) AND isset($_POST['id']) AND isset($_POST['photo']))
{


$requete = $bdd->prepare("UPDATE 
tb_image SET nom = ?, info = ?, commentaire = ?, date = ?, categorie = ?, photo = ? WHERE id = ?");
$requete->execute(array($_POST['nom'], $_POST['info'], $_POST['commentaire'], $_POST['date'], $_POST['categorie'],$_POST['photo'], $_POST['id']));
?>

<?php
}

?>

</th> <th> <h4> Entrer un nouveau rêve  </h4>
<form method="POST" action="">
<input type="text" name="nom2" placeholder="Nom" /><br />
<input type="text" name="info2" placeholder="Descritpion" /><br />
<input type="text" name="commentaire2" placeholder="Commentaire" /><br />
<input type="date" name="date2" placeholder="Date" /><br />
<input type="text" name="categorie2" placeholder="Catégories" /><br />
<input type="submit" value="ok" />
</form>
<?php
$bdd = new PDO('mysql:host=aunatupma1830400.mysql.db;dbname=aunatupma1830400', 'aunatupma1830400', 'Neptune240984');

if(isset($_POST['nom2']) AND isset($_POST['info2']) AND isset($_POST['commentaire2']) AND isset($_POST['date2']) AND isset($_POST['categorie2']))
{


$requete = $bdd->prepare("INSERT INTO tb_image(nom, info, commentaire, date, categorie) VALUES(?,?,?,?,?)");
$requete->execute(array($_POST['nom2'], $_POST['info2'], $_POST['commentaire2'], $_POST['date2'], $_POST['categorie2']));

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
<td><h4>Le numéro du rêve :<?php echo $resultat['id']; ?></h4></td>
<td><h4>Le nom :<?php echo $resultat['nom']; ?></h4></td>
<td><h4>La déscritpion : <?php echo $resultat['categorie']; ?></h4></td>
</tr>
<tr>
<td> </td>
<td><h4>La date :<?php echo $resultat['date']; ?></h4></td>
<td><h4>Le rêve : <?php echo $resultat['info']; ?></h4></td>
<td><h4>Commentaire : <?php echo $resultat['commentaire']; ?></h4></td>
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

<th><h4><?php echo $resultat['categorie']; ?></h4></th>





<?php
}
?>

</table>
</body>

</html>