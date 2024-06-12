<?php
include 'adbconn.php';

$sql = "SELECT `ID`, `Books_Name`, `Author`, `Genre`, `Year`, `Status`, `Quantity` FROM `books`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Book List</h1>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Books_Name</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Status</th>
                <th>Quantity</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['ID']}</td>
                <td>{$row['Books_Name']}</td>
                <td>{$row['Author']}</td>
                <td>{$row['Genre']}</td>
                <td>{$row['Year']}</td>
                <td>{$row['Status']}</td>
                <td>{$row['Quantity']}</td>
                <td>
                    <form action='remove_book.php' method='post' style='display:inline;'>
                        <input type='hidden' name='id' value='{$row['ID']}'>
                        <input type='submit' value='Remove'>
                    </form>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No books found.";
}

?>