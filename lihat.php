<?php
require 'controller.php';

$id= $_GET["id"];

$std= query("SELECT * FROM students WHERE id= $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
   body{
            background-color: cornflowerblue;
            background-size:cover;
            text-align:center;
        }
        .card{
    align-items:center;
    margin-top:50px;
    }
    ul li{
        text-decoration:none;
    }
    data a{
        text-align: center;
    }
    a{
        text-decoration:none;
        color:white;
    }
    h1{
        color:white;
    }
    p{
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    p img{
        border-radius: 100%;
        height: 150px;
        width: 150px;
    }
    h1{
        color: black;
        font-family:'Courier New', Courier, monospace ;
    }

    </style>
</head>
<body>
    <h1 style="text-align:center;">Data Lengkap Siswa</h1>
        <div class="d-flex justify-content-center">
    <div class="card" style="width: 22rem;">
  <div class="card-body">
    <ul>
<p><img src="img/<?= $std["gambar"]?>" style="100px"></p>
<p><?= $std["nama"] ?></p>
<p>-<?= $std["nis"] ?></p>
<p>-<?= $std["rombel"] ?></p>
<p>-<?= $std["rayon"] ?></p>
<p>-<?= $std["status"] ?></p>
<p>-<?= $std["hobi"] ?></p>
<p>-<?= $std["alamat"] ?></p>
<p>-<?= $std["merk_laptop"] ?></p>
<p>-<?= $std["cita_cita"] ?></p>
</ul>
<button type="submit" class="btn btn-primary"><a href="index.php">Kembali Ke Data Siswa</a></button></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
