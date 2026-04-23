<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Detail Data Mahasiswa</h1>
    <table border="0" width="60%" align="center" bgcolor="#ffffff" cellpadding="10" style="border: 1px solid #ccc;">

        <tr bgcolor="#BF40BF">
            <th>
                <table border="0" width="100%" cellpadding="5" cellspacing="0">
                    <tr>
                        <td width="20%" align="center">
                            <img src="logo-binas.png" alt="Logo ITB Binas" width="110">
                        </td>
                        <td width="60%" align="center">
                            <font color="#ffffff" face="Arial" size="4"><b>DATA HASIL PEMBELAJARAN MAHASISWA</b></font><br>
                            <font color="#ffffff" face="Arial" size="2"><b>Himpunan Mahasiswa Manajemen Informatika</b></font><br>
                            <font color="#ffffff" face="Arial" size="2">ITB Bina Sriwijaya Palembang</font>
                        </td>
                        <td width="20%" align="center">
                            <img src="logo-himmi.png" alt="Logo HIMMI" width="110">
                        </td>
                    </tr>
                </table>
            </th>
        </tr>

        <tr>
            <td>
                <table border="0" width="100%" cellpadding="6">
                    <tr>
                        <td width="35%"><b>Nama Lengkap</b></td>
                        <td width="5%">:</td>
                        <td><?= $_GET["nama"] ?></td>
                    </tr>
                    <tr>
                        <td><b>Nomor Induk Mahasiswa</b></td>
                        <td>:</td>
                        <td><?= $_GET["nim"] ?></td>
                    </tr>
                    <tr>
                        <td><b>Program Studi</b></td>
                        <td>:</td>
                        <td><?= $_GET["jurusan"] ?></td>
                    </tr>
                    <tr>
                        <td><b>Alamat Email</b></td>
                        <td>:</td>
                        <td><?= $_GET["email"] ?></td>
                    </tr>
                    <tr>
                        <td><b>Nilai Tugas </b></td>
                        <td>:</td>
                        <td>
                            <ul>
                                <li>Nilai Tugas 1 = <?= $_GET["nilai1"] ?> </li>
                                <li>Nilai Tugas 2 = <?= $_GET["nilai2"] ?></li>
                                <li>Nilai Tugas 3 = <?= $_GET["nilai3"]  ?></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <h3 style="text-align: center;">Selamat anda lulus</h3>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="right">
                            <hr size="1" color="#ccc">
                            <button onclick="window.location.href='latihan_get.php'">
                                Kembali ke Halaman 1
                            </button>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>