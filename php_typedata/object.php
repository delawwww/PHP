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
    <h1>object</h1>

<?php
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
    }
    public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
    } 
    }
      
    $myCar = new Car("red", "Volvo");
    var_dump($myCar);
    ?>
</div>
<img src="DELA.jpg" height="150px">
</div>

</body>
</html>