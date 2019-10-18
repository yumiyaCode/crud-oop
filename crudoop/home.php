<?php
session_start();?>

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
        <a class="navbar-brand text-white">Formula</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            if (isset($_SESSION['login'])) { ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="toko.php">Toko</a>
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
                <?php }else{ ?>

                    <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                        <a class="nav-link" href="login.php">Toko</a>
                </li>
                    </ul>
                    <ul class="navbar-nav">
                    <li>
                        <a class="" aria-labelledby="dropdownMenu2" href="login.php"><input class="btn btn-outline-success" type="submit" name="login" value="login"></a>
                    </li>
                </ul>
                <?php } ?>
            </div>
    </div>
</nav>


                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4 text-center mt-auto">Selamat Datang</h1>
                        <p class="lead"></p>
                    </div>
                </div>


    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
