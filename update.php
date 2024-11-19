<?php
include "config.php";

extract($_POST);
$sql = "UPDATE books SET title='$title', author='$author', `date`=current_timestamp()  WHERE id='$id'";

$conn->query($sql);
header("location: display.php");