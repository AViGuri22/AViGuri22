<!--<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="styles.css">
</head><!--
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
}

h1 {
    text-align: center;
}

form {
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
}

input[type="text"], input[type="number"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background: #28a745;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background: #218838;
}
</style>
<body>
    <h1>Add a New Book</h1>
    <form action="add_book.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br> 	 	
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required>
        <br>
        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" required>
        <br>
        <label for="published_year">Published Year:</label>
        <input type="number" id="published_year" name="published_year" required>
        <br>
        <input type="submit" value="Add Book">
    </form>
</body>
</html>-->











<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
  .center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 29vw;
  background: lightgreen;
  border-radius: 10px;
}
    </style>
<body>
    
<div class="container"> 
        <div class="center">
    <h2>Add a New Book</h2>
    
    <form method="post" action="mbookf1.php">
	<label for="ID">ID:</label><br>
        <input type="text" id="ID" name="ID" required><br><br>

        <label for="books_name">Books_Name:</label><br>
        <input type="text" id="books_name" name="books_name" required><br><br>

        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author" required><br><br>

        <label for="genre">Genre:</label><br>
        <input type="text" id="genre" name="genre"><br><br>
       
        <label for="year"> Year:</label><br>
        <input type="number" id="year" name="year"><br><br>

        <label for="status"> Status:</label><br>
        <input type="text" id="status" name="status"><br><br>

        <label for="quantity"> Quantity:</label><br>
        <input type="text" id="quantity" name="quantity"><br><br>

        <input type="submit" value="Add Book"name="submit">
    </form>
</div>
</div>
    <?php
include 'adbconn.php';


	if(isset($_POST["submit"]))
{
	$ID=$_POST['ID'];
    $Books_Name = $_POST['books_name'];
    $Author = $_POST['author'];
    $Genre = $_POST['genre'];
    $Year = $_POST['year'];
    $Status = $_POST['status'];
    $Quantity = $_POST['quantity'];

    $sql = "INSERT INTO `books`(`ID`, `Books_Name`, `Author`, `Genre`, `Year`, `Status`, `Quantity`) 
            VALUES ('$ID','$Books_Name', '$Author', '$Genre', '$Year','$Status','$Quantity')";

    $data=mysqli_query($conn,$sql);
	if($data){
        echo"<script>alert('New record created successfully');</script>";
    } else {
        echo "<script>alert('please fill all columns');</script>";
    }

    
}
?>
</body>
</html>
