<?php 
// menghubungkan dengan file functions.php
require 'functions.php';

$students = query("SELECT * FROM students");
$nomer = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Bima</title>
</head>
<body>
    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <th>No</th>
            <th>Id</th>
            <th>Email</th>
            <th>Password</th>
            <th>Name</th>
            <th>NIM</th>
        </thead>
        <?php foreach ($students as $student) :?>
        <tr>
            <td><?php echo $nomer ?></td>
            <td><?php echo $student["id_student"] ?></td>
            <td><?php echo $student["email"] ?></td>
            <td><?php echo $student["password"] ?></td>
            <td><?php echo $student["name"] ?></td>
            <td><?php echo $student["nim"] ?></td>
        </tr>
        <?php
            $nomer++;
            endforeach; 
        ?>
    </table>
</body>
</html>