<?php
require 'controller.php';
if(isset($_POST["submit"])){

    if( nambah($_POST) > 0){
        echo "<script>alert('Data berhasil disimpan.');window.location='index.php';</script>";
    }
    else{
         echo "<script>alert('Data gagal disimpan.');window.location='index.php';</script>";
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
        
        }
        h1{
            text-align:center;
        }
        ul li label {
            text-decoration:none;
        }
        .card{
            align-items:center;
            margin-top:80px;
        }
        h1{
          color:white;
        }
    </style>
</head>
<body>
    <h1>Tambah Data Siswa</h1>
    <div class="d-flex justify-content-center">
    <div class="card" style="width: 22rem;">
  <div class="card-body">
        <form method="post">
  <div class="mb-3" style="width:300px;">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" >
  <div class="mb-3 width:300px;">
    <label for="nis" class="form-label">Nis</label>
    <input type="text" class="form-control" id="nis" name="nis" >
  </div>
  <div class="mb-3 width:300px;">
    <label for="rombel" class="form-label">Rombel</label>
    <input type="text" class="form-control" id="rombel" name="rombel" >
  </div>
  <div class="mb-3 width:300px;">
  <label for="rayon" class="form-label">Rayon</label>
  <input type="text" class="form-control" id="rayon" name="rayon" >
</div>
<div class="mb-3 width:300px;">
  <label for="status" class="form-label">Status</label>
  <input type="text" class="form-control" id="status" name="status" >
</div>
<div class="mb-3 width:300px;">
  <label for="hobi" class="form-label">hobi</label>
  <input type="text" class="form-control" id="hobi" name="hobi" >
</div>
<div class="mb-3 width:300px;">
  <label for="alamat" class="form-label">alamat</label>
  <input type="text" class="form-control" id="alamat" name="alamat" >
</div>
<div class="mb-3 width:300px;">
  <label for="merk_laptop" class="form-label">merk_laptop</label>
  <input type="text" class="form-control" id="merk_laptop" name="merk_laptop">
</div>
<div class="mb-3 width:300px;">
  <label for="cita_cita" class="form-label">cita_cita</label>
  <input type="text" class="form-control" id="cita_cita" name="cita_cita" >
</div>
<div class="mb-3 width:300px;">
  <label for="gambar" class="form-label">gambar</label>
  <input type="file" class="form-control" id="gambar" name="gambar">
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
