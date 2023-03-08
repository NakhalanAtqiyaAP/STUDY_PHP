<?php
require 'controller.php';
$student = query("SELECT * FROM students");

if(isset($_POST["cari"])){
    $student= cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body{
            background-color: cornflowerblue;
            background-size:cover;
            text-align:center;
        }
        .hero{
            justify-content:flex;
        }
        a{
            color:white;
            text-decoration:none;
        }
        .waktu{
            
            background-color:#F7C8E0;
            color: black;
            border: 2px solid transparent;
            font-weight: bold;
            text-align:center;
            border-radius: 30px; 
            width:300px;
            margin-top:20px;
        }
        table{
            margin-top:50px;
        }
    </style>
</head>
<body>
<div class="content">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Data Siswa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
       
<form action="" method="post">
<input type="text" name="keyword" size="30" autofocus placeholder="Cari Nama Siswa..." autocomplate="off">
 <button type="submit" name="cari">Cari</button>
 </form>
</div>
</div>
    </div>
  </div>
</nav>
</div>
</div>
<div class="d-flex justify-content-center">
<button type="submit" class="btn btn-primary" style="margin-top:20px;"><a href="tambah.php">Tambah Data Siswa</a></button></div>
<br>
<div class="cari">
<div class="d-flex justify-content-center">

<div class="d-flex justify-content-center">
<table class="table table-bordered border-primary" style="width:1000px; background-color:white;">
    <thead>
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nis</th>
        <th>Rombel</th>
        <th>Rayon</th>
        <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php $i = 1; ?>
    <?php foreach($student as $std) : ?>
        <tr>
        <td><?= $i ?></td>
        <td><?= $std["nama"] ?></td>
        <td><?= $std["nis"] ?></td>
        <td><?= $std["rombel"] ?></td>
        <td><?= $std["rayon"] ?></td>
        <td>
        <a class="btn btn-success" href="edit.php?id= <?= $std["id"] ?>">Ubah</a> |
        <a class="btn btn-danger" href="hapus.php?id= <?= $std["id"] ?>" role="button" onclick="return confirm('Yakin?');">Hapus</a> |
        <a class="btn btn-warning" href="lihat.php?id= <?= $std["id"] ?>">Lihat</a>
        </td>
        </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</div>
</body>
</html>
