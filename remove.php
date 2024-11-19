<?php
include "config.php";

$id = $_GET['bookID'];
$sql = "DELETE FROM books WHERE id = $id";
$conn->query($sql);

header("location: display.php");