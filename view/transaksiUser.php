<?php 
	include '../model/databaseTransaksi.php';
	$db = new database();
 ?>
<!DOCTYPE html>
<html>

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
                    <a class="nav-link" href="homeuser.php">
                        <svg style="margin-bottom:8px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z" /></svg>
                        Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="fa fa-user" href="profil.php"
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


<center>
	<h1>Transaksi yang berhasil</h1>
	<table border="1">
		<tr>
			<th>No.</th>
			<th>Nomor HP</th>
			<th>jenis</th>
			<th>provider</th>
			<th>nominal</th>
		</tr>
		<?php 
			$no = 1;
			foreach ($db->tampil_data() as $data) {  ?>
		<tr>
			<td><?php echo $no++?></td>
			<td><?php echo $data['nohp']?></td>
			<td><?php echo $data['jenis']?></td>
			<td><?php echo $data['provider']?></td>
			<td><?php echo $data['nominal']?></td>
		</tr>
		<?php 
		}
		 ?>
	</table>
  </center>
</body>

</html>