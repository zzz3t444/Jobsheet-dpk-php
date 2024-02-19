<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $angka1 = 10;
    $angka2 = 5;
    echo "Sama dengan (==): " . ($angka1 == $angka2) . "<br>"; // Output: False
    echo "Tidak sama dengan (!=): " . ($angka1 != $angka2) . "<br>"; // Output: True
    echo "Lebih besar dari (>): " . ($angka1 > $angka2) . "<br>"; // Output: True
    echo "Lebih kecil dari (<): " . ($angka1 < $angka2) . "<br>"; // Output: False
    echo "Lebih besar atau sama dengan (>=): " . ($angka1 >= $angka2) . "<br>"; // Output: True
    echo "Lebih kecil atau sama dengan (<=): " . ($angka1 <= $angka2) . "<br>"; // Output: False
    ?>
</body>
</html>