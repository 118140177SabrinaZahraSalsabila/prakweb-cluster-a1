<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 5 No.1 Sabrina Zahra Salsabila</title>
</head>
<body>
    <?php
    $bil1 = 20;
    $bil2 = 5;

    echo "bilangan 1 = " . $bil1 . "<br>";
    echo "bilangan 2 = " . $bil2 . "<br>";
    echo "<br>Berikut merupakan hasil dari setiap operasi <br><br>"; 

    echo "PENJUMLAHAN <br>";
    echo "Operator : + <br>";
    $operator = $bil1 + $bil2;
    echo "Hasil : " . $operator . "<br>";

    echo "<br>PENGURANGAN <br>";
    echo "Operator : - <br>";
    $operator = $bil1 - $bil2;
    echo "Hasil : " . $operator . "<br>";

    echo "<br>PERKALIAN <br>";
    echo "Operator : * <br>";
    $operator = $bil1 * $bil2;
    echo "Hasil : " . $operator . "<br>";

    echo "<br>PEMBAGIAN <br>";
    echo "Operator : / <br>";
    $operator = $bil1 / $bil2;
    echo "Hasil : " . $operator . "<br>";

    echo "<br>MODULUS <br>";
    echo "Operator : % <br>";
    $operator = $bil1 % $bil2;
    echo "Hasil : " . $operator . "<br>";
    ?>
</body>
</html>