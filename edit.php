<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("location:tampil.php?");
}
   $id=$_GET['id'];
   $sql="SELECT * FROM tb_guru INNER JOIN
   tb_mapel WHERE tb_guru.id_guru='$id'";
   $query= mysqli_query($db, $sql);
   $mapel= mysqli_fetch_assoc($query);

   if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
   }
   ?>

<html>
<head>
    <style>
        body
{
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url('R.jpg');
    background-size: cover;
    /* background-attachment: fixed; */
    /* background-repeat: no-repeat; */
    font-family: consolas;
}
.container
{
    position: relative;
    width: 500px;
    min-height: 800px;
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 5px 15px rgba(0,0,0,1);
}
.container:before
{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background: rgba(255, 255, 255, 0.1);
    pointer-events: none;
}
.container::after
{
    content: '';
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    background: linear-gradient(45deg,#ff0047,#6eff00);
    pointer-events: none;
    animation: animate 10s linear infinite;
}
@keyframes animate
{
    0%
    {
        filter:blur(60px) hue-rotate(0deg);
    }
    100%
    {
        filter:blur(60px) hue-rotate(360deg);
    }
}
.form
{
    position: absolute;
    width: 100%;
    height: 100%;
    padding: 40px;
    box-sizing: border-box;
    z-index: 1;
}
.form h2
{
    margin: 0;
    padding: 0;
    color: #fff;
    font-size: 24px;
}
.form .inputBox
{
    width: 100%;
    margin-top: 20px;
}
.form .inputBox input
{
    width: 100%;
    background: transparent;
    border: none;
    border-bottom: 2px solid #fff;
    outline: none;
    font-size: 18px;
    color: #fff;
    padding: 5px 0;
    font-family: consolas;
}
::placeholder
{
    color: #eee;
}
.form .inputBox input[type="submit"]
{
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
.form p
{
    color: #eee;
}
.form p a
{
    color: #fff;
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
</head>
<body>
<div class="container">
        <div class="form">
            <h2 class="text-center">Edit Data</h2>
    <form action="proses_edit.php" method="POST">
        <fieldset>
        <input type="hidden" name="id" value="<?php echo $mapel['id_guru']?>" />
        <div class="inputBox">
            <p>
                <label for="nama_guru">Nama Guru :</label>
                <input type="text" name="nama_guru"  value="<?php echo $mapel['nama_guru']?>" />
            </p>
        </div>
        <div class="inputBox">
            <p>
                <label for="alamat">Alamat :</label><br>
                <textarea name="alamat" id="" cols="30" rows="10" value="<?php echo $mapel['alamat']?>"></textarea>
            </p>
            <p>
            <label for="jenis_kelamin">Jenis Kelamin :</label>
                    <input type="radio" name="jenis_kelamin" value="Laki-Laki" value="<?php echo $mapel['jenis_kelamin']?>"/>
                    <i></i>
                    <span>Laki-Laki</span>
                    <input type="radio" name="jenis_kelamin" value="prempuan" value="<?php echo $mapel['jenis_kelamin']?>"/>
                    <i></i>
                    <span>Perempuan</span>
            </p>
            <div class="inputBox">
            <p>
                <label for="nama_mapel">Nama Mapel :</label>
                <input type="text" name="nama_mapel"  value="<?php echo $mapel['nama_mapel']?>"/>
            </p>
</div>
            <div class="inputBox">
            <p>
                <label for="ruangan">Ruangan :</label>
                <input type="text" name="ruangan"  value="<?php echo $mapel['ruangan']?>"/>
            </p>
</div>
            <div class="inputBox">
            <p>
                <input class="action-btn" type="submit" value="edit" name="edit" />
            </p>
</div>
        </fieldset>
</form>
</center>
<a class="action-btn" href="tampil.php">Back</a>
</body>
</html>