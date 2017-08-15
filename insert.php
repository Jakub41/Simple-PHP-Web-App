 <?php
include 'connection.php';

$sql = "SHOW TABLES LIKE 'emails'";
$result = $conn->query($sql);
if ($result) {
	$sql = "CREATE TABLE emails (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	message VARCHAR(300) NOT NULL,
	email VARCHAR(50),
	gender VARCHAR(50)
	)";

	if ($conn->query($sql) === TRUE) {
	} else {
	    echo "Error creating table: " . $conn->error;
	}
}

echo "yoooo";
$sql = "INSERT INTO emails (name, message, email,gender)
VALUES ('$name', '$body', '$to', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// $conn->close();
?> 