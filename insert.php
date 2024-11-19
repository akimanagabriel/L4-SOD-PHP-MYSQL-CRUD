<?php

include "config.php";

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die("Invalid request method");
}

// extract($_POST);
$title = $_POST['title'];
$author = $_POST['author'];


$sql = "INSERT INTO `books`(`title`, `author`) VALUES ('$title','$author')";

if($conn->query($sql)){
    // die("Book created");
    header("location: display.php");
} else {
    die("Failed to create a new book");
}

