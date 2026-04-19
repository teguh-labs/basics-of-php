<?php 

//array
//variabel yang memiliki banyak nilai
//pasangan antara key dan value
//key-nya adalah index, yang dimulai dari 0

//Membuat Array:
$hari = array("Senin", "Selasa", "Rabu");

//Cara Baru:
$bulan = ["Januari", "Februari", "Maret"];

//Array dalam PHP boleh beda-beda tipe data
$arr = ["Word", 123, true, 2.32];


//Menampilkan array
//VERSI DEVELOPER (DEBUGGING)
echo var_dump($hari);
echo "<br>";
echo print_r($hari);

//Menampilkan 1 element pada array
echo $bulan[1]; //Februari
echo "<br>";
echo $arr[2]; //true

//Menambahkan elemen baru array
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
echo var_dump($hari);

?>