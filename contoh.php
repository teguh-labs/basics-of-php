<?php 
// --- BAGIAN 1: PHP (LOGIKA / BACKEND) ---
// PHP nentuin data dan logika sebelum halaman dikirim ke browser.
$nama = "Teguh Prayoga";
$jabatan = "Ketua Umum HIMMI";
$prodi = "Manajemen Informatika";
$jam = date("H"); // Ambil jam sekarang

if ($jam < 12) {
    $sapaan = "Selamat Pagi";
} elseif ($jam < 18) {
    $sapaan = "Selamat Siang";
} else {
    $sapaan = "Selamat Malam";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil Ketua Umum</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            transition: background 0.5s; /* Biar pas ganti warna halus */
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
            width: 300px;
            color: #333;
        }
        button {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }
        button:hover { background: #0056b3; }
        
        /* Class tambahan buat JavaScript nanti */
        .dark-mode { background: #222; }
        .dark-mode .card { background: #333; color: white; }
    </style>
</head>
<body>

    <div class="card">
        <h3><?= $sapaan; ?>!</h3>
        <h1><?= $nama; ?></h1>
        <p><strong><?= $jabatan; ?></strong></p>
        <p><?= $prodi; ?></p>
        
        <hr>
        
        <button onclick="ubahMode()">Toggle Dark Mode</button>
    </div>

    <script>
        function ubahMode() {
            // JS langsung ngerubah tampilan tanpa perlu refresh ke MAMP (server)
            document.body.classList.toggle('dark-mode');
            console.log("Mode berhasil diubah secara instan!");
        }
    </script>

</body>
</html>