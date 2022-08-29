<?php
$servername = "localhost";
$username = "BridgeUser";
$password = "Saturnv1";
$dbname = "BridgeBlock";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE BridgeTable SET Bridge_State = 'Closed' WHERE Bridge_State = 'Open' ";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
