<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh 04</title>
</head>
<body>
    <?php
    // Konstanta untuk nilai judul
    define("Judul","Hitung luas lingkaran");
    // Konstan untuk nilai phi
    define("PHI","3.14");
    echo Judul;
    $r=10;
    echo"<br />Jari-jari : $r<br>\n";
    $luas=PHI*$r*$r;
    echo"Luas lingkaran = $luas";
    ?>
</body>
</html>