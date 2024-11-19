<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>All Books</h1>
    <table border='1'>
        <thead>
            <tr>
                <th>#</th>
                <th>Book title</th>
                <th>Book AUthor</th>
                <th>Date registered</th>
                <th colspan='2'>Opertions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "config.php";
                $sql = "SELECT * FROM books";
                $result = $conn->query($sql);
                $i = 0;
                while ($book = $result->fetch_object()) {
                    $i++;
                    ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $book->title ?></td>
                            <td><?php echo $book->author ?></td>
                            <td><?php echo $book->date ?></td>
                            <td>
                                <a href="remove.php?bookID=<?php echo $book->id ?>">delete</a>
                            </td>
                            <td>
                            <a href="editing.php?bookID=<?php echo $book->id ?>">edit</a>
                            </td>
                        </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
    </center>
</body>
</html>