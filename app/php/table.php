 <?php
include 'connection.php'; 

$sql = "SELECT id, name, email, message,gender FROM emails";
$result = $conn->query($sql);
?>
<div class="container bordered">
      <table>
        <thead>
          <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Message</th>
              <th>Gender</th>
          </tr>
        </thead>

        <tbody>
 <?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	?>
 
    	<tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td><?php echo $row['gender']; ?></td>
          </tr>
         



 <?php

    }
} else {
    echo "0 results";
}

$conn->close();
?> 
 </tbody>
      </table>
      </div>

