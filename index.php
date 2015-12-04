<?php
$servername = "sqlserver1010.database.windows.net";
$username = "MArterburn";
$password = "fOOTBALL33";
// Create connection
$conn = new mysqli($sqlserver1010.database.windows.net, $MArterburn, $fOOTBALL33);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
