<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt2022";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
/*
$sql = "SELECT id, username, password, FROM Users";
$result = mysqli_query($conn, $sql);

print_r( mysqli_num_rows($result) );

if ( mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name; " . $row["username"]. " " . "<br>";
    }
} else {
    echo "0 results";
}
*/

?>