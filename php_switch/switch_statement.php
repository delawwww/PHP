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
    <h1>Belajar PHP switch</h1>
    <h2>Switch statement</h2>

<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
</div>
<img src="DELA.jpg" height="150px">
</div>

</body>
</html>