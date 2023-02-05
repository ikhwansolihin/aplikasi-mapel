<?php
include("koneksi.php");
if(isset($_POST['kirim_data'])){
    $kode=$_POST['id_guru'];
    $nama_guru=$_POST['nama_guru'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $kode_mapel=$_POST['kode_mapel'];
    $nama_mapel=$_POST['nama_mapel'];
    $ruangan=$_POST['ruangan'];

    $sql="INSERT INTO tb_mapel(nama_mapel, ruangan) VALUES ('$nama_mapel','$ruangan' )";
    $query=mysqli_query($db, $sql);

    $sql="SELECT max(kode_mapel) AS mapel_kode FROM tb_mapel LIMIT 1";
    $query=mysqli_query($db, $sql);

    $data = mysqli_fetch_array($query);
    $mapel_kode = $data ['mapel_kode'];

    $sql="INSERT INTO tb_guru(nama_guru, alamat, jenis_kelamin, kode_mapel ) VALUES ('$nama_guru','$alamat','$jenis_kelamin','$mapel_kode' )";
    $query=mysqli_query($db, $sql);


    if($query){
        header('location:tampil.php?status:sukses');
    }else{
        header('location:tampil.php?status:gagal'); 
    }
}
?>