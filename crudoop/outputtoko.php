<?php
session_start();
if (isset($_SESSION['login'])) {
if (isset($_POST['simpan'])) {
    // data diri
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $kelamin=$_POST['kelamin'];
    $jumlah=$_POST['jumlah'];
    $tanggal=$_POST['tanggal'];


    // buku
    $namab=$_POST['namab'];
    $kode=$_POST['kode'];
    $jumlahb=$_POST['jumlahb'];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>



<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Formulir</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item disabled">
                    <a class="nav-link disabled">Toko</a>
            </li>
        </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" ><?php echo $_SESSION['login']?></a>
                </li>
                <li>
                    <a class="" aria-labelledby="dropdownMenu2" href="logout.php"><input class="btn btn-danger" type="submit" name="login" value="logout"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- navbar tutup -->





<div class="container-fluid">
    <div class="row row-md-4 ">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Toko Buku</h2>
                    </div>
                    <div class="card-body">
                    <!-- data diri -->
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Tanggal</th>
                        </tr>
                    </thead>

                        <tbody>
                            <tr>
                            <td><?php echo"$nama";?></td>
                            <td><?php echo"$alamat";?></td>
                            <td><?php echo"$kelamin";?></td>
                            <td><?php echo"$jumlah";?></td>
                            <td><?php echo"$tanggal";?></td>
                            </tr>
                        </tbody>
                    </table>




                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Kode</th>
                                <th scope="col">jenis</th>
                                <th scope="col">Jumlah Barang</th>
                                <th scope="col">harga</th>
                            </tr>
                        </thead>
                    <tbody>
                        
                    <?php for ($i=0; $i < count($namab) ; $i++) {?> 
                        <tr>
                            <td><?php echo"$namab[$i]";?></td>
                            <td><?php echo"$kode[$i]";?></td>
                            <td><?php echo"$jenis[$i]";?></td>
                            <td><?php echo"$jumlahb[$i]";?></td>
                            <td><?php echo"Rp.".number_format($harga[$i],0,",",".");?></td>
                        </tr>
                        <?php 
                        $barang[] =  $harga[$i] * $jumlahb[$i] ;
                        }
                        $total1 = array_sum($barang);
                        if($total1 >= 500000){
                            $total = ($total1*20)/100;
                        }
                        elseif ($total1 >= 250000) {
                            $total = ($total1*10)/100;
                        }
                        else {
                            $total = 0;
                        }
                        $hasil = $total1-$total;
                        $total2 = "Rp.".number_format($total1,0,",",".");
                        $total3 = "Rp.".number_format($total,0,",",".");
                        $hasil2 = "Rp.".number_format($hasil,0,",",".");
                        ?>
                        </tbody>
                    </table>
                        <table class="table table-hover">
                                    <tr>
                                        <th class="text-center">Pembayaran</th>
                                    </tr>
                                
                                <tbody>
                                <tr>
                                    <td colspan="5">Jumlah Total</td>
                                    <td colspan="5"><?php echo"$total2";?></td>
                                </tr>
                                <tr>
                                    <td colspan="5">Jumlah Diskon</td>
                                    <td colspan="5"><?php echo"$total3";?></td>
                                </tr>
                                <tr>
                                    <td colspan="5">Hasil Yang Dibayar</td>
                                    <td colspan="5"><?php echo"$hasil2";?></td>
                                </tr>
                                    </tbody>
                                </table>
                        <form action="outputbayar.php" method="POST">
                        <div class="form-group">
                            <label >Bayar</label>
                            <input type="hidden" name="hasil" value="<?php echo "$hasil"?>">
                                <input class="form-control" type="number" min="<?php echo $hasil?>" name="beli" id="">
                                <br>
                                <input type="submit" value="Bayar" class="btn btn-primary" name="bayar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php 
}else{
    header("location:home.php");
}
?>