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

                            
<?php 
    if (isset($_POST['bayar'])) {
        $bayar = $_POST['beli'];
        $hasil = $_POST['hasil'];
        $hasil1 = $bayar-$hasil;
            ?>
            <div class="container">
                <div class="col-sm-4"></div>
                    <div class="mx-auto justify-content-center col-sm-4" style="margin-top:125px;">
                        <div class="card border-success text-center" style="width: 20rem;">
                        <div class="card-body">
                            <div class="alert alert-success" role="alert">
                                Terima Kasih, Ini Kembalian : <?php  echo "Rp.".number_format($hasil1,0,",",".");?>
                            </div>
                                    <label for="">Ingin Beli Lagi</label>
                            <form action="" method="POST">
                                <input type="submit" value="Ulang" class="btn btn-primary" name="ulang">
                            </form>
                                <input type="submit" value="Tidak" data-toggle="modal" data-target="#terima" class="btn btn-danger" name="terima">
                                <div class="modal fade" id="terima" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">Terima Kasih Atas Pembeliannya
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="terima" class="alert alert-success" role="alert">
                                            Terima Kasih
                                            </div>
                                </div>
                                </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        
    } 
    ?>
    <?php
        if (isset($_POST['ulang'])) {
            header("location:toko.php");}
    ?>

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