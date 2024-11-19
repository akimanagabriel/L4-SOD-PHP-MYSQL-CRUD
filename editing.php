<?php
include "config.php";
$id = $_GET['bookID'];
$book = $conn->query("SELECT * from books WHERE id = $id")->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Edit book details</h1>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $book->id ?>">
            <label for="">Book title</label>
            <input type="text" name="title" value="<?php echo $book->title ?>" >
            <br>
            <br>
            
            <label for="">Book Author</label>
            <input type="text" name="author" value="<?php echo $book->author ?>">
            <br>
            <br>
            <label for="">Date</label>
            <input type="datetime" name="date" value="<?php echo $book->date ?>">
            <br><br>

            <button type="submit">save changes</button>
        </form>
    </center>
</body>
</html>