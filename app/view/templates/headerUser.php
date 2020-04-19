<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <ol>
        <li><a href="<?= BASE_URL?>Home/logOut">Logout</a></li>
        <li><a href="<?= BASE_URL?>Home/index">Home</a></li>
        <li><a href="<?= BASE_URL?>Home/disposisiMasuk">Disposisi Surat Masuk(<?php echo $data['jumlahMasuk'] ?>)</a></li>
        <li><a href="<?= BASE_URL?>Home/disposisiKeluar">Disposisi Surat Keluar(<?php echo $data['jumlahKeluar'] ?>)</a></li>
    </ol>