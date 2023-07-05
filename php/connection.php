 <?php
$servername = "localhost"; // Server name where the app has the DB
$username = "root"; // user of the DB 
$password = "root"; // password of the DB
$dbname = "mono"; // DB name 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>