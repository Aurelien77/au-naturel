<?php

require("db.php");
$photo ="";
$valid ="";


if(isset($_POST['btnAjout']))
{

$nom= $_POST['txtnom'];
$info= $_POST['txtinfo'];
$date= $_POST['date'];
$categorie= $_POST['categorie'];
$commentaire= $_POST['commentaire'];

$photo= $_FILES['img']['name'];
$upload = "picture/".$photo;
move_uploaded_file($_FILES['img']['tmp_name'],$upload
);


$sql ="INSERT INTO tb_image(nom,info,photo,date,categorie,commentaire) VALUES('$nom','$info','$photo','$date','$categorie','$commentaire')";
if(mysqli_query($conn,$sql))
{


// echo "Image ajouté avec success.";
$valid = "<div class='alert alert-success'>

<a href='#' class='close'  data-dismiss='alert'  aria-label='close'>&times;</a>
<b> Image ajout avec success.</b> </div>";

}else{  

echo "Erreur Ajout image !";

}

}



?>






