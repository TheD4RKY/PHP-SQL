<?php


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
echo $firstname; echo $lastname;
$servername = "localhost";
$username = "kaluzikd";
$password = "growlbox123g";
$dbname = "hustadatabase";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
};
$sql = "INSERT INTO hustadatabase
VALUES ( ' ','$firstname','$lastname','$email')";


$rawdata = "SELECT * FROM hustadatabase";
$result = $conn->query($rawdata);
echo "<br>";
echo "<br>";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<br>";
if ($result->num_rows > 0) {
  echo "<table>";
   echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>JMENO</th>";
    echo "<th>PRIJMENI</th>";
    echo "<th>EMAIL</th>";
  echo "</tr>";
  while($row = $result->fetch_assoc()) {
    echo " <tr><td>";echo $row[ID]; echo "</td>";
     echo "<td>";echo $row[Jmeno]; echo "</td>";
      echo "<td>";echo $row[Prijmeni]; echo "</td>";
       echo "<td>";echo $row[Email]; echo "</td> </tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

?>

<html>
<head></head>
<body>
	



<form action="index.php" method="post">
FirstName: <input type="text" name="firstname"><br>
LastName: <input type="text" name="lastname"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
<a href="./leftjoin.php">leftjoin</a>



</body></html>
