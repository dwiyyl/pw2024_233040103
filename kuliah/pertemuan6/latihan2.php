<?php
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Sandhika Galih",
        "nrp" =>"233040200",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "sandhika.jpeg"
    ],
    [
        "nama" => "Doddy Ferdiansyah",
        "nrp" =>"233040300",
        "email" => "doddy@unpas.ac.id",
        "jurusan" => "Teknik Industri",
        "gambar" => "doddy.jpg"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>