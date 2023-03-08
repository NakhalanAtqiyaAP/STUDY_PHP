<?php
$siswa =mysqli_connect("localhost", "root", "", "db_students1");

function query($query){
    global $siswa;
    $hasil = mysqli_query($siswa,$query);
    $pakaian = [];
    while($baju = mysqli_fetch_assoc($hasil)){  
    $pakaian[] = $baju;
}
return $pakaian;
}
function nambah($data){
    global $siswa;
    $gambar=htmlspecialchars($data["gambar"]);
    $nama=htmlspecialchars($data["nama"]);
    $nis=htmlspecialchars($data["nis"]);
    $rombel=htmlspecialchars($data["rombel"]);
    $rayon=htmlspecialchars($data["rayon"]);
    $status=htmlspecialchars($data["status"]);
    $hobi=htmlspecialchars($data["hobi"]);
    $alamat=htmlspecialchars($data["alamat"]);
    $merk_laptop=htmlspecialchars($data["merk_laptop"]);
    $cita_cita=htmlspecialchars($data["cita_cita"]);
     $query ="INSERT INTO students
          VALUES('','$gambar','$nama','$nis','$rombel','$rayon','$status','$hobi','$alamat','$merk_laptop','$cita_cita')";
         
         mysqli_query($siswa,$query);

    return mysqli_affected_rows($siswa);
}
function hapus($id){
    global $siswa;
    mysqli_query($siswa, "DELETE FROM students WHERE id= $id");

    return mysqli_affected_rows($siswa);
}
function ubah($data){
    global $siswa;
    $id= $data["id"];
    $gambar=htmlspecialchars($data["gambar"]);
    $nama=htmlspecialchars($data["nama"]);
    $nis=htmlspecialchars($data["nis"]);
    $rombel=htmlspecialchars($data["rombel"]);
    $rayon=htmlspecialchars($data["rayon"]);
    $status=htmlspecialchars($data["status"]);
    $hobi=htmlspecialchars($data["hobi"]);
    $alamat=htmlspecialchars($data["alamat"]);
    $merk_laptop=htmlspecialchars($data["merk_laptop"]);
    $cita_cita=htmlspecialchars($data["cita_cita"]);
    $query ="UPDATE students SET
        gambar='$gambar',
        nama='$nama',
        nis='$nis',
        rombel='$rombel',
        rayon='$rayon',
        status='$status',
        hobi='$hobi',
        alamat='$alamat',
        merk_laptop='$merk_laptop',
        cita_cita='$cita_cita'
        WHERE id= $id";
    
    mysqli_query($siswa, $query);
return mysqli_affected_rows($siswa);
}
function cari($keyword){
    $query="SELECT * FROM students WHERE
            nama LIKE '%$keyword%'OR
            nis LIKE '%$keyword%'OR
            rombel LIKE '%$keyword%' OR
            rayon LIKE '%$keyword%'";
    return query($query);
}
?>
