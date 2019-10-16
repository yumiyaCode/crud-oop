<?php 
session_start();
if(isset($_SESSION['login'])){
    //menampilkan
}else{
    //sesion belum ada
    ?>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <title></title>
  </head>
  <body style="background-color:skyblue;">

<div class="container-fluid" style="padding:100px;">
 <div class="row">
  <div class="col-md-4 m-auto">
    <div class="card border-danger">
      <div class="card-body">
    <h1><center>404 NOT FOUND</center></h1>
     <img class="card-img-top" src="/assets/img/GIF_8215787.gif" alt="Card image">
     <div class="col mt-3">
     <a href="login3.php"><button class="btn-outline-primary btn-block">Login Dulu!!</button></a>
    </div>
    </div>

      </form>
      </div>
        </div>
          </div>
          </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
   </body>
</html>
<?php    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Diki Maulana</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="menu.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="uh1.php">produk</a>
      </li>
    
     
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="logout.php" method="post">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="send">Logout</button>
    </form>
  </div>
</nav>
</header>
<div class="container">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header">Formulir</div>
                    <div class="card-body">
                        <form action="uh2.php" method="post">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" id="" required>
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea name="alamat" class="form-control" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>&nbsp; &nbsp;
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="jk" value="Laki-laki" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check form-check-inline custom-radio">
                            <input class="custom-control-input" id="customRadioInline2" type="radio" name="jk"  value="Perempuan">
                            <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Tanggal Pembelian</label>
                        <input type="date" name="tgl" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="number" name="jml" class="form-control" id="" required><br>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Simpan" name ="send" class=" btn btn-outline-success btn-block">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>