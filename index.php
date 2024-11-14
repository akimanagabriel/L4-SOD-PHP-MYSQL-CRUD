<?php
// create a db connection
$connection = new Mysqli("localhost","root","","school_db");


// inserting data into our table
// $sql = "INSERT INTO `students`(`firstname`, `lastname`, `level`) VALUES ('KALIMA','OSCAR','LEVEL 5 SOD')";

// DELETE COMMAND
// $sql = "delete from students where firstname = 'kalima'";

// UPDATE COMMAND
// $sql = "update students set firstname = 'Peter' where id = 1";

// if($connection->query($sql)){
//     echo "query executed successfully!";
// }else{
//     echo "failed to execute query";

// }