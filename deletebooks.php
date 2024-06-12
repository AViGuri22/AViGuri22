<!-- remove_book.php -->
<?php
include 'adbconn.php';

$ID=$_POST['ID'];

$sql = "DELETE FROM books WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $ID);

if ($stmt->execute()) {
    echo "Book removed successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();

// Redirect back to the book list
header("Location: bookdisplay.php");
exit();
?>