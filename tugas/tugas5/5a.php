<?php
$mahasiswa = [
    [
        "nama" => "Sandhika Galih",
        "nrp" =>"233040200",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.jpg"
    ],
    [
        "nama" => "Dwi Yulianti",
        "nrp" =>"233040103",
        "email" => "dwi@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "2.jpg"
    ],
    [
        "nama" => "Amaliyah Nur Haida Jum'ati",
        "nrp" =>"233040082",
        "email" => "amaliyah@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "3.jpg"
    ],
    [
        "nama" => "Dian Astri",
        "nrp" =>"233040085",
        "email" => "dian@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "4.jpg"
    ],
    [
        "nama" => "Firda Faridatul Fajriyanti",
        "nrp" =>"233040098",
        "email" => "firda@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "5.jpg"
    ],
    [
        "nama" => "Meta Cantika Dewi",
        "nrp" =>"233040100",
        "email" => "meta@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "6.jpg"
    ],
    [
        "nama" => "Silma Tsania Nurassy",
        "nrp" =>"233040107",
        "email" => "silma@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "7.jpg"
    ],
    [
        "nama" => "Icha Aprilia Putri",
        "nrp" =>"233040108",
        "email" => "icha@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "8.jpg"
    ],
    [
        "nama" => "Maelani Ningrum",
        "nrp" =>"233040164",
        "email" => "maelani@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "9.jpg"
    ],
    [
        "nama" => "Desi Hafita Ashri",
        "nrp" =>"233040165",
        "email" => "desi@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "10.jpg"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
    <style>
        img{
            width: 100px;
            height: 100px;
        }
    </style>
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