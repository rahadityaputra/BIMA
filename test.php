<?php 
      $students = 
      [
          [
              "Nama" => "Rahaditya Abimanyu Putra",
              "NIM"  => "123230095"
          ],
          [
              "Nama" => "Alfonsus Sitanggang",
              "NIM"  => "123230100"
          ],
          [
              "Nama" => "Muhammad Abid Dewantoro",
              "NIM"  => "123230093"
          ],
          [
              "Nama" => "Rifki Rahardian",
              "NIM"  => "123230113"
          ],
          [
              "Nama" => "Ayodya Enhanayoan",
              "NIM"  => "123230098"
          ]
          ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($students as $student) : ?>
            <li><?php echo "Nama : " . $student["Nama"]. ", NIM : " . $student["NIM"]; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

