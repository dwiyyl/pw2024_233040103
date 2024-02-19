<?php
$nama = 'Dwi';
$mata_kuliah = 'Pemrograman Web';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 2</title>
</head>
<body>
    <h1>
        <?php echo "Hello, $nama"; ?>
    </h1>
    <p><?php echo $mata_kuliah; ?></p>
    <!-- echo "<i><h2>" . '"' . "$string1 saya $string2, $string2 $string1 saya." . '"' . "</h2></i>" -->
    <p><?php echo '"' . "Hallo, nama saya $nama, saya sedang kuliah $mata_kuliah" . '"'; ?></p>
</body>
</html>