<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $id=$_POST['id'];
    $nama_guru=$_POST['nama_guru'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $kode_mapel=$_POST['kode_mapel'];
    $nama_mapel=$_POST['nama_mapel'];
    $ruangan=$_POST['ruangan'];

    $sql = "UPDATE tb_guru SET nama_guru='$nama_guru', alamat='$alamat', jenis_kelamin='$jenis_kelamin' WHERE id_guru='$id'";
    $query= mysqli_query($db,$sql);

    $sql = "UPDATE tb_mapel SET nama_mapel='$nama_mapel',ruangan='$ruangan' WHERE kode_mapel='$id'";
    $query= mysqli_query($db,$sql);

if($query){
    header('location:tampil.php');
}else{
    die ("gagal mengedit");
}}
?>