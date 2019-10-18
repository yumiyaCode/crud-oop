<?php
session_start();
if (isset($_SESSION['login'])) { ?>

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
    <div class="row row-md-4 ">
        <div class="col-md-4 mx-auto">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Toko</h2>
                    </div>
                        <div class="card-body">
                            <form action="prosestoko.php" method="get">
                            <div class="form-group">
                                    <label >Nama   </label>
                                <input class="form-control" type="text" name="nama" id="">
                            </div>

                            <div class="form-group">
                                <label >Alamat   </label>
                                <textarea class="form-control" name="alamat" name="alamat"  id="" cols="10" rows="5"></textarea>
                            </div>  
                            
                            <div class="form-group">
                                <label>Jenis Kelamin : </label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" value="Laki-Laki" name="kelamin">Laki-Laki
                                </label>
                            </div>
                                
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" value="Perempuan" name="kelamin">Perempuan
                                </label>
                            </div>

                            <div class="form-group">
                                <label >Tanggal Pembelian</label>
                                    <input class="form-control" type="Date" name="tanggal" id="">
                            </div>

                            <div class="form-group">
                                <label >Jumlah</label>
                                    <input class="form-control" type="number" name="jumlah" id="">
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-outline-primary" name="simpan">
                            <input type="reset" value="Reset" class="btn btn-outline-warning">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>



    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php }else{
    header("location:home.php");
    }?>