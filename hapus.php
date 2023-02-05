<?php
//------------koneksi---------------------//
include("koneksi.php");
//---------------------------------------//
$id = $_GET['id'];
//--------query------------------------//
$sql= "DELETE FROM tb_guru where id_guru=$id";
$query = mysqli_query($db, $sql);
//---------------------------------------------------//
$sql= "DELETE FROM tb_mapel where kode_mapel=$id";
$query = mysqli_query($db, $sql);
//-------------------------------------------------//
if($query){
    header("Location:tampil.php?status=sukses");
}else{
    die("akses dilarang");  
}
?>