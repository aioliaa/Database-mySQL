<?php 
include 'connect/koneksi.php';
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Jurusan</title>
</head>
<body>
    <form action="" method="POST">
    <label for="jur">Mahasiswa</label>
    <input type="text" id="jur" name="mahasiswa">
    <br>
    <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>

<?php  
if (isset($_POST['submit'])) {
    $jurusan = $_POST['mahasiswa'];

    $result = "INSERT INTO jurusan (id, nim, nama, jenis_kelamin, jurusan_id, alamat,no_telp,email ) VALUES ('$mahasiswa', '', '')";


    $sql = mysqli_query($conn, $result);
    if ($sql) {
        echo "Data berhasil disimpan";
    } else {
        echo "Data gagal disimpan"; 
    }
    

}

?>