<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container" style="display: flex;" >
<div class="wrap">

    <h1>Biodata</h1>
    <p>Nama:Dela Novela</p>
    <p>Kelas:XI-RPL</p>
    <h1>comparison</h1>

<!-- Mengembalikan nilai benar jika $x tidak sama dengan $y,
 atau keduanya tidak bertipe sama -->
<?php
$x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because types are not equal
?>

</div>
<img src="DELA.jpg" height="150px">
</div>

</body>
</html>