<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Toko ON</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    </div>
  </div>
</nav>
</header>
<!-- end header -->

 <div class="container">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-10">
                <div class="card ">
                    <div class="card-header">
                    <center>
                    <h5>Produk</h5>
                    </center>
                     </div>
    <div class="card-body">
       <form action="proses.php?aksi=tambah"method="post">
         <div class="form-group">
              <label>Nama Produk</label>
              <input type="text" name="nama" class="form-control" required>
         </div>
         
          <div class="form-group">
              <label>Kategori</label>
                    <select name="kategori" class="form-control">
                    <option value="elektronik">Elektronik</option>
                    <option value="baju">Baju</option>
                    <option value="makanan">Makanan</option>
                    <option value="perkakas">Perkakas</option>
               </select>
        </div>
           
         <div class="form-group">
               <label>Jumlah</label>
              <input type="number" name="jumlah" class="form-control" required>
         </div>

         <div class="form-group">
               <label>Harga</label>
              <input type="number" name="harga" class="form-control" required>
         </div>

         <div class="form-group">
               <label>Deskripsi</label>
              <textarea name="deskripsi" class="form-control" style="height:100px" required></textarea>
         </div>
       <hr>
       <div class="col-md-12">
         <input type="submit" name="save" value="Simpan" class="form-control btn-primary">
        </div>  
       </form>

    </div>
     </div>
      </div>
       </div>
        </div>
         </div>


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
