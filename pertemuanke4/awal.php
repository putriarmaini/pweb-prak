<?php
    // $_Post("nama")="Putri Armaini";
    // var_dump($_POST);
    if ($_SERVER['REQUST_METHOD'])
    if (isset($_POST['submit_btn'])) {
        if (strlen($_POST['Kamu']) > 0) {
            echo "login !";
        } else {
            echo "Isi diameter terlebih dahulu";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4</title>
</head>
<body>

    <h1>Nama<?php echo isset($_GET['Nama']) ? $_GET['Nama'] : ''; ?> </h1>

    <form action="" method="post">
        <input type="text" name="Kamu" value="">
        <button>Submit</button>
    </form>

    <!-- <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button>Hitung</button>

        <hr>

        <ul>
            <li>Luas Sisi : 0</li>
            <li>Volume : 0</li>
        </ul>
    </form> -->
</body>
</html>