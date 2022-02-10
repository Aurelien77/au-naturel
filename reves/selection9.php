<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="tableau.css">
<table border ="1">
<tr> 

<?php
$servername = "aunatupma1830400.mysql.db";
$username = "aunatupma1830400";
$password = "Neptune240984";
$dbname = "aunatupma1830400";
$variable = stripslashes($ancienne_variable);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id,nom,reve,date,categories FROM reves ORDER BY categories";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
   ?> <tr><th> &nbsp;  <?php echo "<br>id: " . $row["id"]. " </th><th><br>- Nom:" . $row["nom"]. "</th><th><br>Description : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;" . $row["reve"]. "</th><th><br>Date : &nbsp; &nbsp; &nbsp; &nbsp;" . $row["date"]. "</th><th><br>categories : " . $row["categories"]. "<br>";   ?> </th> </tr> <?php
    }

} else {
    echo "0 results";
}

mysqli_close($conn);
?>


</table>
</body>
</html>



