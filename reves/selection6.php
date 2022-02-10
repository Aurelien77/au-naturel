<!DOCTYPE html>
<html>
<body>

<?php
$servername = "aunatupma1830400.mysql.db";
$username = "aunatupma1830400";
$password = "Neptune240984";
$dbname = "aunatupma1830400";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, nom, reve FROM reves";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["nom"]. " " . $row["reve"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>



