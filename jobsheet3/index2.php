<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $nama = "Budi";
    $umur = 20;
    $tinggi = 170;
    $namaDepan = "Andi";
    $umur += 5;
    $tinggi -= 2;
    $gaji = $umur * 1000000;
    $luas = 5 ** 2;
    $potongan = $gaji / 10;
    $sisa = $umur % 2;
    $salam = "Selamat pagi, " . $namaDepan . " " . $nama;

    echo "Nama: $nama" . PHP_EOL;
    echo "Umur: $umur tahun" . PHP_EOL;
    echo "Tinggi: $tinggi cm" . PHP_EOL;
    echo "Gaji: Rp. $gaji" . PHP_EOL;
    echo "Luas: $luas cm^2" . PHP_EOL;
    echo "Potongan: Rp. $potongan" . PHP_EOL;
    echo "Sisa: $sisa" . PHP_EOL;
    echo $salam . PHP_EOL;

    ?>

</body>

</html>