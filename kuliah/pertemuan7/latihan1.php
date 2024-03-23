<?php
// Variabel Scope / lingkup variabel
$x = 10;

function tampilX() {
    global $x;
    echo $x;
}
tampilX();
echo "<br>";
echo "<hr>";

// SUPERGLOBALS
// variable global milik PHP
// merupakan Array Associative
var_dump($_POST);
echo "<br>";
echo "<hr>";
?>

<?php
// $_GET
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
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
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
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    
</body>
</html>