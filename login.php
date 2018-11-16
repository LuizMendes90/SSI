<?php
$login = $_GET['login'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ssi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM usuarios where login = '$login'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["login"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

