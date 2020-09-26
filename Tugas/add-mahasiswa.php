<?php 
include 'connect/koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM jurusan")
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Mahasiswa</title>
</head>
    <body>
    <h3>Tambah Data Mahasiswa</h3>
        <form action="" method="POST">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim">
            <br>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
            <br>
            <label for="jk">Jenis Kelamin</label>
                <select id="jk" name="jenis_kelamin">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            <br>
            <label for="jur">Jurusan</label>
                <select name="jurusan" id="jur">
            <?php foreach ($result as $row): ?>
                <option value="<?= $row["id"]; ?>"><?= $row["nama"]; ?></option>
            <?php endforeach ?>
                </select>
            <br>
            <label for="alamat">Alamat</label>
            <textarea rows="3" cols="30" name="alamat" id="alamat"></textarea>
            <br>
            <label for="no_telp">No. Telp</label>
            <input type="text" name="no_telp" id="no_telp">
            <br>
            <label for="email">E-Mail</label>
            <input type="email" name="email" id="email">
            <br>
            <button type="submit" name="submit">Simpan</button>
        </form>
    </body>
</html>

    <?php  
    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        $email = $_POST['email'];

        $sql = "INSERT INTO mahasiswa VALUES ('','$nim', '$nama', '$jenis_kelamin', '$jurusan', '$alamat', '$no_telp', '$email', '', '' )";


        $query = mysqli_query($conn, $sql);
        if ($query) {
        echo "Data berhasil disimpan";
        } else {
        echo "Data gagal disimpan"; 
        }
}
?>