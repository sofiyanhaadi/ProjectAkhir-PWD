<?php 
$conn = mysqli_connect("localhost","root","","db_newinternet");
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
date_default_timezone_set('Asia/Jakarta');
?>