<?php
require_once "index.php";

// read data from db
$result = $connection->query("SELECT * FROM students");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>All students</h1> 
   <table border='1'>
    <tr>
        <th>Identification</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Level</th>
        <th>Actions</th>
    </tr>
    <?php
    $i = 0;
        while($student = $result->fetch_object()){
            $i ++;
            ?>
                <tr>
                    <td><?php echo $i  ?></td>
                    <td><?php echo $student->firstname  ?></td>
                    <td><?php echo $student->lastname  ?></td>
                    <td><?php echo $student->level  ?></td>
                    <td>
                        <a href="#">delete</a> | 
                        <a href="#">update</a>
                    </td>
                </tr>
            <?php
        }
    ?>
   </table>
</body>
</html>