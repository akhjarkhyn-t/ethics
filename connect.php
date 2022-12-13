<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ethics";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
mysql_set_charset('utf8');
$object = $_REQUEST;

$error = '';
foreach ($object as $key => $item)
    if ($item == '')
        $error .= $key." талбар хоосон байна\n";

if($error != '') die($error);

$query = "INSERT INTO contacts (username, phone, email, comment)
VALUES ('".$object['name']."', ".$object['phone'].", '".$object['email']."', '".$object['message']."')";

if ($conn->query($query) === TRUE) {
    echo "хүсэлт амжилттай боллоо. Саналаа өгсөнд баярлалаа";
  } else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }



?>