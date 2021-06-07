<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='https://badoystudio.com/cloudme.fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>laman isi ulang </title>

</head>

<body>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <img src="../gambar/logo1.jpg" width="10%" height="10%">
        <a class="navbar-brand" href="#" style="color: dodgerblue;font-family: 'Pacifico', cursive;">PULSA MURAH
            OFFICIAL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: 200px;">
            <ul class="navbar-nav ml-auto" style="font-family: 'Libre Baskerville', serif;">
                <li class="nav-item active">
                    <a class="nav-link" href="">
                        <svg style="margin-bottom:8px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z" /></svg>
                        Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="fa fa-user" href=""
                        style="margin-top: 12px; width: 40px; margin-right:30px;color:black">Profil</a>
                </li>
                <li class="nav-item">
          <a class="nav-link" href="transaksiUser.php">Transaksi</a>
        </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        setting
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">pengaturan akun</a>
                        <a class="dropdown-item" href="#">profil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">logOut</a>
                    </div>
                </li>
        </div>
    </nav>



    <div class="container">

        <div class="row" style="margin-top:20px">
            <div class="col-6">
                <h2>Selamat Datang di Pulsa Murah </h2>
                <p>Hallo reseller, yuk banyak melakukan transaksi yang murah dan untung yuk! <br>
                    isi ulang pulsa, data dan juga lainnnya hanya ada di Pulsa murah
                </p>

            </div>
            <div class="col-md">
            <div>
            <form action="../controller/prosesTransaksi.php?aksi=tambah" method="post">
              <div class="mb-3  ">
                <lab el for="jenis" class="form-label"></label>
                  <select name="jenis" id="jenis" class="btn btn-warning mt-3">
                    <option value="Pulsa">Pulsa</option>
                    <option value="Paket Data ">Paket Data</option>
                    <option value="paket telpon">Paket Telpon</option>
                  </select>
              </div>
              <div class="mb-3  ">
                <lab el for="nominal" class="form-label"></label>
                  <select name="nominal" id="nominal" class="btn btn-warning mt-3">
                  <option selected>--Nominal--</option>
                        <option value="5000">5000</option>
                        <option value="10000">10000</option>
                        <option value="15000">15000</option>
                        <option value="20000">20000</option>
                        <option value="25000">25000</option>
                        <option value="50000">50000</option>
                        <option value="75000">75000</option>
                        <option value="100000">100000</option>
                        <option value="150000">150000</option>
                        <option value="200000">200000</option>
                  </select>
              </div>
              
              <div class="mb-3  ">
                <lab el for="provider" class="form-label"></label>
                  <select name="provider" id="provider" class="btn btn-warning mt-3">
                  <option selected>--Provider--</option>
                        <option value="Telkomsel">Telkomsel</option>
                        <option value="indosat">Indosat</option>
                        <option value="tri">3</option>
                        <option value="xl">XL</option>
                  </select>
              </div>
              <input type="text" name="nohp" placeholder="nohp" class="form-control rounded-pill">
              <div>
                <button class="btn btn-warning mt-3 n2">Daftar</button>
              </div>
            </form>
          </div>
            </div>
        </div>
    </div>
</body>

</html>