<?php 
include '../databasechart.php';
$diri = new Diri();
$aksi = $_GET['aksi'];
if(isset($_POST['save']))
{
    $id = $_POST['id'];
    $nama_produk = $_POST['nama'];
    $kategori_produk = $_POST['kategori'];
    $jumlah_produk = $_POST['jumlah'];
    $harga_produk = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $sub_total= $jumlah_produk * $harga_produk;
    

}
if($aksi == "tambah")
{
    $diri->create($nama_produk, $kategori_produk, $jumlah_produk, $harga_produk, $deskripsi, $sub_total);
    header("location:index.php");
}
elseif($aksi == "delete")
{
    $diri->delete($_GET['id']);
    header("location:index.php");
}
elseif($aksi == "update")
{
    $diri->update($id, $nama_produk, $kategori_produk, $jumlah_produk, $harga_produk, $deskripsi, $sub_total);
    header("location:index.php");
}

?>
