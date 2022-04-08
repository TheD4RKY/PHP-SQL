<?php



$servername = "ip";
$username = "jmeno";
$password = "heslo";
$dbname = "nazevdatabase";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
};

$q = "SELECT *
FROM hustadatabase
LEFT JOIN hustadatabase2
ON hustadatabase.id = hustadatabase2.id;";
$result = $conn->query($q);
while ($row = $result->fetch_assoc())
{
    $links_name = $row;
    $link_h3 = $links_name != '' ? '<h3>' . $links_name . '</h3>' : '';
    print '<pre>';
    print_r ($row);
}


?>

<html>
<head></head>
<body>
	






</body></html>
