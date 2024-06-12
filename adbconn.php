<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="book_manegment1";

// Create connection
$conn = mysqli_connect($servername,$username, $password,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
	echo"connection completed";
}

// Create database
/*$sql = "CREATE DATABASE userdb";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
*/
// Close connection

?>