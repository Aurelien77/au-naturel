
<?
if(empty($mot)){
header('Location:pageformulaire.php');
exit;
}
else{

$db = mysql_connect('aunatupma1830400.mysql.db', 'aunatupma1830400', 'Neptune240984') or die('<font color=red>Désolé mais vous ne pouvez voir les infos de la data-base</font>');
mysql_select_db('aunatupma1830400',$db);

$query="Select * from tb_image where nom like '$mot'" ;
$result = mysql_query( $query )or exit ('Erreur SQL !'.$query.'<br>'.mysql_error());
while($data = mysql_fetch_array($result))
{
if(empty($data['info'])){
echo"Désolé pas de résultat";
}
else
{
echo"Nom : ".$data['noms']."&nbsp;&nbsp;Description:".$data['info']."&nbsp;&nbsp; date:".$data['date']."&nbsp;&nbsp;commentaire".$data['commentaire']."<br>";
}
}
mysql_close();
}
?>


