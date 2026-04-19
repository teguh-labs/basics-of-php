<?php 
//Array Associative 
//Definisinya sama seperti array numerik, tapi :
//Key nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Teguh Prayoga",
        "nim" => "2511013",
        "email" => "teguhprayoga@mhs.binas.id",
        "jurusan" => "Manajemen Informatika",
        "nilai_tugas" => [80,95,100]
    ],
    [
        "nama" => "Joko Nugroho",
        "nim" => "2515002",
        "email" => "jokonug@mhs.binas.id",
        "jurusan" => "Manajemen",
        "nilai_tugas" => [88,79,94]
    ],
    [
        "nama" => "Budi Nugraha",
        "nim" => "2510033",
        "email" => "budipriambudi@mhs.binas.id",
        "jurusan" => "Bisnis Digital",
        "nilai_tugas" => [54,38,15]
    ],
];

// echo $mahasiswa[0]["nama"];
// echo $mahasiswa[0]["nilai_tugas"][2];
// echo "<br>";
// echo $mahasiswa[1]["email"];
// echo $mahasiswa[1]["nilai_tugas"][0];

// // echo $mahasiswa["nim"];
// echo "<br>";
// echo $mahasiswa["email"];
// echo "<br>";
// echo $mahasiswa["jurusan"]
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

    <?php foreach ($mahasiswa as $no_mhs => $mhs) : ?>
        <h3>Mahasiswa ke- <?= $no_mhs+1 ?></h3>
        <ul>
            <li>Nama = <?= $mhs["nama"] ?></li>
            <li>NIM = <?= $mhs["nim"] ?></li>
            <li>E-Mail = <?= $mhs["email"] ?></li>
            <li>Jurusan = <?= $mhs["jurusan"] ?></li>
            <li>
                Nilai Tugas :
                <?php foreach ($mhs["nilai_tugas"] as $index => $nilai) : ?>
                    <ul type="square">
                        <li>Tugas ke - <?= $index + 1?> = <?= $nilai; ?></li>
                    </ul>
                <?php endforeach ?>
            </li>
        </ul>

        <?php $total_nilai = array_sum($mhs["nilai_tugas"]) ?>
        <?php $jumlah_nilai = count($mhs["nilai_tugas"]) ?>
        <?php $rata_rata = $total_nilai / $jumlah_nilai ?>

        <?php if($rata_rata >= 80) : ?>
            <?php 
                $ucapan = "Selamat anda dinyatakan lulus!";
                $color = "green"
            ?>
        <?php else : ?>
            <?php 
                $ucapan = "Mohon maaf, anda tidak dinyatakan lulus"; 
                $color = "red"
            ?>
        <?php endif ?>

        <h4>
            Total nilai = <?= $total_nilai ?><br>
            Rata-rata nilai = <?= round($rata_rata, 2) ?><br> 
        </h4>
        <h4 style="color: <?= $color ?> ;"><?= $ucapan ?></h4>
        <hr style="height: 3px; 
                   background-color: black;
                   border: none;">
    <?php endforeach ?>
</body>
</html>