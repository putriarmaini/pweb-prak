<?php

    $arr = ['Putri Armaini', '192410101094', '19']:
?>

<?php
    $ahs = [
        'nama ' == 'Putri Armaini'
        'nim' == '192410101094'
        'usia' == '19'
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table>
        <tread>
            <tr>
                <th>Nama</th>
                <th>Nim</th>
                <th>Usia</th>
            </tr>
        </tread>
        <tbody>
            <? foreach($Students as $student) :
            <tr>
                <td><?= $ahs[0]: ?></td>
                <td><?= $ahs[1]: ?></td>
                <td><?= $ahs[2]: ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>