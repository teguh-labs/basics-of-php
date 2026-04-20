<?php

$mahasiswa = [
    [
        "nama" => "Teguh Prayoga",
        "nim" => "2511013",
        "email" => "teguhprayoga@mhs.binas.id",
        "jurusan" => "Manajemen Informatika",
        "nilai_tugas" => [80, 95, 100]
    ],
    [
        "nama" => "Joko Nugroho",
        "nim" => "2515002",
        "email" => "jokonug@mhs.binas.id",
        "jurusan" => "Manajemen",
        "nilai_tugas" => [88, 79, 94]
    ],
    [
        "nama" => "Budi Nugraha",
        "nim" => "2510033",
        "email" => "budipriambudi@mhs.binas.id",
        "jurusan" => "Bisnis Digital",
        "nilai_tugas" => [54, 38, 15]
    ],
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
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="detail_data.php?nama=<?= $mhs["nama"]?>&nim=<?= $mhs["nim"]?>&jurusan=<?= $mhs["jurusan"]?>&email=<?= $mhs["email"]?>">
                    <?= $mhs["nama"] ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>