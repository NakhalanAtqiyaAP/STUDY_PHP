<?php
require 'controller.php';

$id= $_GET["id"];

$std= query("SELECT * FROM students WHERE id= $id")[0];

if(isset($_POST["submit"])){

    if( ubah($_POST) > 0){
        echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
    }
    else{
         echo "<script>alert('Data gagal diubah.');window.location='index.php';</script>";
    }
}
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
    margin-top:80px;
    }

    </style>
</head>
<body>
    <h1 style="text-align:center;">Edit Agent Valorant</h1>
    <form action="" method="post">
        <ul>
            <input type="hidden" name="id" value=" <?= $std["id"]; ?>">
        </ul>
        <div class="d-flex justify-content-center">
    <div class="card" style="width: 22rem;">
  <div class="card-body">
        <form method="post">
  <div class="mb-3" style="width:300px;">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" id="nama" value="<?= $std['nama'] ?>">
  <div class="mb-3 width:300px;">
    <label for="nis" class="form-label">nis</label>
    <input type="text" class="form-control" id="nis" name="nis" id="nis" value="<?= $std['nis'] ?>">
  </div>
  <div class="mb-3 width:300px;">
    <label for="rombel" class="form-label">rombel</label>
    <input type="text" class="form-control" id="rombel" name="rombel" id="rombel" value="<?= $std['rombel'] ?>">
  </div>
  <div class="mb-3 width:300px;">
   <label for="rayon" class="form-label">rayon</label>
   <input type="text" class="form-control" id="rayon" name="rayon" id="rayon" value="<?= $std['rayon'] ?>">
 </div>
 <div class="mb-3 width:300px;">
   <label for="status" class="form-label">status</label>
   <input type="text" class="form-control" id="status" name="status" id="status" value="<?= $std['status'] ?>">
 </div>
 <div class="mb-3 width:300px;">
   <label for="hobi" class="form-label">hobi</label>
   <input type="text" class="form-control" id="hobi" name="hobi" id="hobi" value="<?= $std['hobi'] ?>">
 </div>
 <div class="mb-3 width:300px;">
   <label for="alamat" class="form-label">alamat</label>
   <input type="text" class="form-control" id="alamat" name="alamat" id="alamat" value="<?= $std['alamat'] ?>">
 </div>
 <div class="mb-3 width:300px;">
   <label for="merk_laptop" class="form-label">merk_laptop</label>
   <input type="text" class="form-control" id="merk_laptop" name="merk_laptop" id="merk_laptop" value="<?= $std['merk_laptop'] ?>">
 </div>
 <div class="mb-3 width:300px;">
   <label for="cita_cita" class="form-label">cita_cita</label>
   <input type="text" class="form-control" id="cita_cita" name="cita_cita" id="cita_cita" value="<?= $std['cita_cita'] ?>">
 </div>
 <div class="mb-3 width:300px;">
  <label for="gambar" class="form-label">gambar</label>
  <input type="file" class="form-control" id="gambar" name="gambar" id="gambar" value="<?= $std['gambar'] ?>">
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>
    </div>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
