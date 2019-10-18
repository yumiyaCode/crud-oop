<?php 
class Database {
    // $host = untuk memberitau kita menggunakan server lokal yaitu localhost,
    // $user = username dari localhost
    // $pass = password untuk masuk ke localhost mysql kita, kosongkan jika tidak menggunakan password
    // $db = untuk memberi akses kita menggunakan database mana di server lokal kita (localhost)
    public $host = "localhost", $user = "root", $pass = 123, $db="latihan";
    public $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if($this->koneksi)
        {
            // echo "berhasil";
        } else {
            return "Koneksi Database Gagal";
        }
    }
}
class Diri extends Database {
    // Menampilkan Semua Data
    public function index()
    {
        
        $data1 = mysqli_query($this->koneksi,"SELECT * FROM chart");
        // var_dump($datadata1);
        return $data1;
    }
    // Menambah Data
    public function create($nama_produk, $kategori_produk, $jumlah_produk, $harga_produk, $deskripsi, $sub_total)
    {
        
        mysqli_query($this->koneksi,"insert into chart values('','$nama_produk','$kategori_produk', '$jumlah_produk', '$harga_produk', '$deskripsi', '$sub_total')");
    }
    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from chart where id='$id'");
    }
    // Menampilkan Data Berdasarkan id
    public function show($id)
    {
        $data1 = mysqli_query($this->koneksi,"select * from chart where id='$id'");
        return $data1;
    }
      public function edit($id)
    {
        $data1 = mysqli_query($this->koneksi,"select * from chart where id='$id'");
        return $data1;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama_produk, $kategori_produk, $jumlah_produk, $harga_produk, $deskripsi, $sub_total)
    {
        $data1 = mysqli_query($this->koneksi,"UPDATE chart SET nama_produk='$nama_produk',kategori_produk='$kategori_produk', jumlah_produk='$jumlah_produk',harga_produk='$harga_produk', deksripsi ='$deskripsi', sub_total ='$sub_total'  WHERE id='$id'");
        return $data1;
    }
}
// koneksi db
$db = new Database();
?>