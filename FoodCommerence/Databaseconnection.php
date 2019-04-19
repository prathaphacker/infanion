<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="Test";

   $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
global $conn;
function indb(){
    echo"in db";
}
?>

 