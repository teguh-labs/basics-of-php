<?php 

// TIME

// UNIX TIMESTAMP / EPOCH TIME 
// detik yang sudah berlalu sejak 1 Januari 1970
echo time();

//Hari apa 2 hari ke depan?
//Caranya 60*60*24*2 (Ujungnya 2 karena mau tau 2 hari kedepan)
echo date("l", time()+172800); 
//Output : Monday (now Saturday)

//Menghitung 100 hari kedepan
echo date("l, d-M-Y", time()+60*60*24*100);

//Menghitung 100 hari kebelakang
echo date("l, d-M-Y", time()-60*60*24*100);

//Menghitung detik berlalu sejak tanggal lahir
mktime(0,0,0,0,0,0);
//jam, menit, detik, bulan, tanggal, tahun

$tanggal_lahir = mktime(0,0,0,9,23,2005);
echo $tanggal_lahir;

echo date("l", mktime(0,0,0,9,23,2005));

//strtotime()
echo strtotime("23 sep 2005");
echo date("l", strtotime("23 sep 2005"));


?>