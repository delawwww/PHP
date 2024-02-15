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
    <h1>PHP if else</h1>

<?php
$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>

</div>
<img src="DELA.jpg" height="150px">
</div>

</body>
</html>