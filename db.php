<<<<<<< HEAD
<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "cake";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
=======
<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "cake";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
>>>>>>> e79dea0f365ff9665af8e4a165b203b458e7321d
