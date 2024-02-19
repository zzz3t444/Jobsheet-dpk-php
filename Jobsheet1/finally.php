<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Jobsheet 1
    $nama = "Afkar Mitsal Faiq Fahrezi";
    $kelas = "XIRPL";
    $tempat_lahir = "Kulonprogo, Sentolo";
    $tanggal_lahir = "13 Juni 2006";
    $agama = "Islam";

    echo "<p>Nama: $nama</p>";
    echo "<p>Kelas: $kelas</p>";
    echo "<p>Tempat, Tanggal Lahir: $tempat_lahir, $tanggal_lahir</p>";
    echo "<p>Agama: $agama</p>";
  

    // Jobsheet 2
    $nama = "Afkar Mitsal Faiq Fahrezi";
    $kelas = "XIRPL";
    $tempat_lahir = "Kulonprogo, Sentolo";
    $tanggal_lahir = "13 Juni 2006";
    $agama = "Islam";

    echo "Nama saya adalah $nama. Saya duduk di kelas $kelas. Saya lahir di $tempat_lahir pada tanggal $tanggal_lahir. Saya beragama $agama.";


    // jobsheet 3
    $nama = "Afkar Mitsal Faiq Fahrezi";
    $umur = 17;

    // Echo
    echo "Nama saya " . $nama . " dan saya berusia " . $umur . " tahun.";

    // Print
    print "Halo, $nama! Anda berusia $umur tahun, ya?";

    // printf
    printf("Nama: %s, Umur: %d tahun.", $nama, $umur);


    // jobsheet 4
    $angkaDesimal = 3.14;
    $angkaBulat = 10;
    $boolean = true;
    $string = "Hello World!";

    echo "Angka desimal: %d\n" . $angkaDesimal;
    echo "Angka bulat: %f\n" . $angkaBulat;
    echo "Nilai boolean: %b\n" . $boolean;
    echo "String: %s\n" . $string;
    ?>
</body>

</html>