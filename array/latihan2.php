<?php 
//Pengulangan pada array
//for / foreach

$angka = [12,53,77,35,234,96,10, 128, 7];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .numbers{
            width: 100px;
            height: 100px;
            background-color: salmon;
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 30px;
            font-weight: 600;
            line-height: 100px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <!-- Looping menggunakan for -->
    <?php for($i = 0; $i < count($angka); $i++) : ?>
        <div class="numbers"><?= $angka[$i] ?></div>
    <?php endfor ?>

    <div class="clear"></div>

    <!-- Looping dengan foreach -->
     <?php foreach ($angka as $a) : ?>
        <div class="numbers"><?= $a ?></div>
     <?php endforeach ?>
</body>
</html>