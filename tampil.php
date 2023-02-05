<!DOCTYPE html>
<html>
    <head>
        <title>Tampilan</title>
    </head>
    <style>
        body
{
    margin: 0;
    padding: 0;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url('R.jpg');
    font-family: arial;
}
        .action-btn {
  display: inline-block;
  text-decoration: none;
  color: white;
  font-weight: 700;
  background: linear-gradient(90deg,#a701c8,#55e7fc);
  padding: 0.5em 2em;
  border-radius: 60px;
  margin: 1em 0;
  transition: 0.3s;
}
    </style>
    <body>
        <center>
    <table border="1">
        <tr>
            <td  bgcolor="#0e3742">NO.</td>
            <td  bgcolor="red">nama guru</td>
            <td  bgcolor="green">alamat</td>
            <td  bgcolor="rainbow">jenis kelamin</td>
            <td  bgcolor="orange">nama mapel</td>
            <td  bgcolor="purple">ruangan</td>
            <td  bgcolor="blue">mengubah</td>
        </tr> 
        <?php
        include("koneksi.php");
        $query = mysqli_query($db, "SELECT * FROM tb_guru INNER JOIN
     tb_mapel ON tb_guru.kode_mapel = tb_mapel.kode_mapel");
        
        while($mapel=mysqli_fetch_array($query)){
            echo "<tr>";
                       echo "<td>".$mapel['id_guru']."</td>";
                       echo "<td>".$mapel['nama_guru']."</td>";
                       echo "<td>".$mapel['alamat']."</td>";
                       echo "<td>".$mapel['jenis_kelamin']."</td>";
                       echo "<td>".$mapel['nama_mapel']."</td>";
                       echo "<td>".$mapel['ruangan']."</td>";
                       echo "<td>";
                       echo "<button><a href='edit.php?id=".$mapel['id_guru']."'>Edit</a></button> |";
                       echo "<button><a href='hapus.php?id=".$mapel['id_guru']."'>hapus</a></button>";
                       echo "</td>";
            echo "</tr>";
           }
        ?>
  <h4><a class="action-btn" href="tambah.php" name="Tambah" value="tambah">Tambah</a></h4>
  </table>
  <h4><a class="action-btn" href="index.php">Menu Utama</a></h4><br>
        </center>
</body>
</html>