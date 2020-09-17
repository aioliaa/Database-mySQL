<?php 
$servername = "localhost";
$username = "root"
$password = ""

$conn = mysql_connect("localhost", "root", "", "db_mahasiswa"  )
$result = mysql_query($conn, "SELECT * FROM jurusan")


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
    <table border="1" cellpadding="7" cellspacing="0">
     <tr>
         <td>ID</td>
         <td>Nama Jurusan</td>

     </tr>
     <?php foreach ($result as $row): ?>
        <tr>
            <td><?php echo $row ["id"]; ?> </td>
            <td><?php echo $row ["nama"]; ?> </td>
        </tr>
    <?php endforeach ?>
 </table>

     
 </body>
 </html>

 