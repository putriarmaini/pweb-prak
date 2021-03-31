<?php
    require 'tabung.php';

    $tabung

    $luas = 0;
    $volume = 0;
    
    // if(isset($_POST["botton_submit"])){


    //     $diameter = $_POST["diameter"];
    //     $tinggi = $_POST["tinggi"];
    //     $r = $diameter/2;

    //     $luas = 2 * 3.14 * $r * ($r + $tinggi);
    //     $luasselimut = 2 * 3.14 * $r * $tinggi;
    //     $volume = 3.14 * $r * $r * $tinggi;

    //     echo"Diameter $diameter<br/>";
    //     echo "Tinggi $tinggi <br/>";
    // }

    $tabung = new Tabung;
    $tabung = null;

    if(isset($_POST["botton_submit"])){

        $tabung->setDiameter($_POST['diameter']);
        $tabung->setTinggi($_POST['tinggi']);
        

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button nama='button_submit'>Hitung</button>

        <hr>

        <ul>
            <li>Luas Selimut : <?= $luasselimut;?></li>
            <li>Volume : <?= $volume; ?></li>
        </ul>
    </form>
</body>
</html>