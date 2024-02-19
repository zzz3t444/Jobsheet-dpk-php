<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $a = 12;
    $b = 2;

    $penjumlahan = $a + $b;
    $pengurangan = $a - $b;
    $perkalian = $a * $b;
    $pembagian = $a / $b;
    $modulus = $a % $b;

    echo "Nilai a = " . $a . "<br>";
    echo "Nilai b = " . $b . "<br>";
    echo "<br>";

    echo "Hasil penjumlahan: " . $penjumlahan . "<br>";
    echo "Hasil pengurangan: " . $pengurangan . "<br>";
    echo "Hasil perkalian: " . $perkalian . "<br>";
    echo "Hasil pembagian: " . $pembagian . "<br>";
    echo "Hasil modulus: " . $modulus . "<br>";

    ?>

</body>

</html>