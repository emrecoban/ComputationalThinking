<?php 
//$conn = new mysqli("localhost", "root", "", "computationalthinkingscore");
$conn = new mysqli("localhost", "emrecob2_rootCTS", "s?R2Xg%3Mu9h", "emrecob2_cts");
$conn -> set_charset("utf8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>