<?php

echo "Mulai <br>";
$nilai_awal = 5;
while($nilai_awal <= 100){
    echo "Hello World $nilai_awal x! <br>";
    $nilai_awal = $nilai_awal + 5;
    // $nilai_awal += 5;
}
echo "Selesai <br>";


echo "<hr>";


echo "Mulai <br>";
for ($i = 10; $i >= 1; $i -=1){
// for ($i = 10; $i >= 1; $i--){
// for ($nilai_awal = 1; $nilai_awal <= 10; $nilai_awal +=1){
    echo "Hello World $i x! <br>";
}
echo "Selesai <br>";