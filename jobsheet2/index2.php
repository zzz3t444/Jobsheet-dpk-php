<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$barang = array(
  "CPU",
  "Motherboard",
  "RAM",
  "Storage (HDD/SSD)",
  "Power Supply Unit (PSU)",
  "Casing",
  "Keyboard",
  "Mouse",
  "Monitor",
  "VGA Card (Opsional)",
  "Operating System",
);

echo "<h1>Daftar Barang yang Dibutuhkan untuk Setup Komputer</h1>";
echo "<ul>";
foreach ($barang as $item) {
  echo "<li>$item</li>";
}
echo "</ul>";

$keterangan = array(
  "CPU" => "Pilih CPU yang sesuai dengan kebutuhan dan anggaran Anda.",
  "Motherboard" => "Pastikan motherboard kompatibel dengan CPU yang Anda pilih.",
  "RAM" => "Kapasitas RAM yang besar akan meningkatkan kinerja komputer.",
  "Storage (HDD/SSD)" => "Pilih storage yang sesuai dengan kebutuhan penyimpanan Anda.",
  "Power Supply Unit (PSU)" => "Pilih PSU dengan watt yang cukup untuk memenuhi kebutuhan semua komponen komputer.",
  "Casing" => "Pilih casing yang sesuai dengan ukuran motherboard dan komponen lainnya.",
  "Keyboard" => "Pilih keyboard yang nyaman digunakan untuk mengetik dan bermain game.",
  "Mouse" => "Pilih mouse yang akurat dan responsif untuk bermain game.",
  "Monitor" => "Pilih monitor dengan resolusi dan ukuran yang sesuai dengan kebutuhan Anda.",
  "VGA Card (Opsional)" => "Jika Anda ingin bermain game atau melakukan pekerjaan grafis yang berat, Anda memerlukan VGA card.",
  "Operating System" => "Pilih operating system yang sesuai dengan kebutuhan Anda.",
);

foreach ($barang as $item) {
  echo "<p><b>$item:</b> $keterangan[$item]</p>";
}

?>

</body>
</html>