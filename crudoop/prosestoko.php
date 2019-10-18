<?php
session_start();
if (isset($_SESSION['login'])) {?>
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






<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header text-center">
                    <h2></h2>
                </div>
                <div class="card-body">
    <!-- form buka -->
        <form action="outputtoko.php" method="post">
            <?php   
            if (isset($_GET['simpan'])) {
                $nama=$_GET['nama'];
                $alamat=$_GET['alamat'];
                $kelamin=$_GET['kelamin'];
                $jumlah=$_GET['jumlah'];
                $tanggal=$_GET['tanggal'];
            for ($i=1; $i <= $jumlah ; $i++) { 
            ?>
            <div class="form-group">
                <label>Nama Barang</label>
                    <input class="form-control" type="text" name="namab[]" id="">
            </div>

            <div class="form-group">
                <label>Kode Barang</label>
                    <input class="form-control" type="text" name="kode[]" >
            </div>
            
            <div class="form-group">
                <label>Barang</label>
                    <select class="form-control" name="jenis[]">
                        <option value="Laptop">Laptop</option>
                        <option value="Komputer">Komputer</option>
                        <option value="Mouse">Mouse</option>
                        <option value="Kabel">Kabel</option>
                        <option value="Keyboard">Keyboard</option>
                </select> 
            </div>

            <div class="form-group">
                <label >Harga Barang</label>
                    <input class="form-control" type="number" name="harga[]" id="">
            </div>

            <div class="form-group">
                <label >Jumlah Barang</label>
                    <input class="form-control" type="number" name="jumlahb[]" id="">
            </div>

            <br><br><br><br><br><br>
        <!-- form tutup -->
        <?php } ?>
        <input type="hidden" name="nama" value="<?php echo "$nama";?>">
        <input type="hidden" name="alamat" value="<?php echo "$alamat";?>">
        <input type="hidden" name="kelamin" value="<?php echo "$kelamin";?>">
        <input type="hidden" name="tanggal" value="<?php echo "$tanggal";?>">
        <input type="hidden" name="jumlah" value="<?php echo "$jumlah";?>">
        <input type="submit" value="Simpan" class="btn btn-primary" name="simpan">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
}
?> 

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php }else{
   
   header("location:home.php");
 }?>