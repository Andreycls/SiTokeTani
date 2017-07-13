<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="TokeTani" content="">
    <meta name="Port&SSL" content="">

    <title>SiTokeTani </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>





    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel='shortcut icon' href='img/Asemm.png' type='image/x-icon'/ >

</head>

<body>
<?php
	include("auth.php");
?>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                  <a href="index.php"> <img src="img/Sitoni.png" width="80" height="40" alt=""/></a>


          </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                     <a href="IndexAdmin.php"><p >Beranda</p></a>

                    </li>

                    <li>

                        <a href="contentAdmin.php"><p style="color:#0A49F3">Pasar</p> </a>
                    </li>

                    <li>

                        <a href="kebutuhanAdmin.php#kebutuhan">Kebutuhan </a>
                    </li>
                    <li>
                     <a href="dashboardAdmin.php"><p>Menu Utama</p></a>

                   </li>
                     <li> <div id="buttonLogout"  onClick="confirm('Akun Berhasil Keluar')"><a href="index.php">Keluar</a></div>
                    </li>




              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>






    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message" >

                        <h1>PASAR </h1>
                        <hr class="intro-divider">
                         <h3>Sistem Informasi Tauke dan Petani</h3>
                         <p>&nbsp;</p>
                             <ul class="list-inline intro-social-buttons">

                         <li>
                         <div class="btn btn-default btn-lg">
                            <a href="#produk" class="smoothScroll"><em class="fa fa-github fa-fw"></em> <span class="network-name">Lihat Produk</span></a></div></li>
                             <li>
                         <div class="btn btn-default btn-lg">
                            <a href="#penjual" class="smoothScroll"><em class="fa fa-github fa-fw"></em> <span class="network-name">Lihat Penjual</span></a></div></li>

                            <li>
                         <div class="btn btn-default btn-lg">
                            <a href="#kategori" class="smoothScroll"><em class="fa fa-github fa-fw"></em> <span class="network-name">Lihat Informasi Seputar Pertanian</span></a></div></li>


      </ul>

<html>
<head>



    <div id="popup">
      <div class="window">
        	<a href="#" class="close-button" title="Close">X</a>
            <h2 style="color:#000000">Login	</h2>
            <p style="color:#000000">&nbsp;</p>
            <p style="color:#000000">Username : <input type="text" style="color:#000000"></input></p>
            <p style="color:#000000">Password: <input type="password" style="color:#000000"></input></input>
            </p>
            <div id="button"><a href="content.php">Masuk</a></div>
            <p style="color:#000000">Belum mempunyai akun? Silahkan <a href="index.html">daftar</a></p>


        </div>
    </div>
    <ul class="list-inline intro-social-buttons">
            <li>

            </li>
                            <li>

          <li>

          <li>
            </li>

                      </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <p><!-- /.intro-header -->

      <!-- Page Content -->

    <a  name="produk"></a></p>
    <div class="content-section-a">

    <div class="navigasi">
      <p><a href="index.php">Beranda</a> > Pasar</p>

    </div>
<div class="col-lg-1 col-sm-2">
    <a href="Product.php"><h1>Produk</h1>
    <p>&nbsp;</p>
    </a>
      </div>

      <div class="container">


            <div class="row">

                </a>
          </div>
         <table align="center" width="300" cellspacing="100" border="0">
  <tbody>
    <tr>
      <th scope="col"><a href="produkAdmin.php"><img  class="img-circle"  src="img/padi.jpg" width="250" height="250" alt="oala"><p align="center">PADI</p></a></th>
      <th><p style="color:#FDFDFD">.................</p></th>
      <th scope="col"><a href="produkAdmin.php"><img class="img-circle" src="img/Bawangmerah.jpg" width="250" height="250"><p align="center">BAWANG MERAH</p></th></th></a>
       <th><p style="color:#FDFDFD">.................</p></th>
      <th scope="col"><a href="produkAdmin.php"><img class="img-circle" src="img/Andaliman.jpg" width="250" height="250"><p align="center">ANDALIMAN</p></th></a>
       <th><p style="color:#FDFDFD">.................</p></th>
      <th scope="col"><a href="produkAdmin.php"><img class="img-circle" src="img/kelapa.jpg" width="250" height="250"><p align="center">KELAPA</p></th></a>
    </tr>
  </tbody>
</table>

          <?php /*
// Load file koneksi.php
include "koneksi.php";

$query = "SELECT * FROM gambar"; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql) ; // Ambil jumlah data dari hasil eksekusi $sql

if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<td>";
		echo "<th scope col><img src='img/".$data['nama']."' width='350' height='300'>
		<p>".$data['namaProduk']."</p></td>";
		echo "<th scope col><br>  </br></td>";

		echo "</td>";
	}
}else{ // Jika data tidak ada
	echo "<tr><td colspan='3'>Data tidak ada</td></tr>";
}
*/
?>








      </div>

      <a href="ProdukAdmin.php#DataProduk">
            <h3>&nbsp;</h3>
            <h3>Lihat Produk lainnya....</h3>
      </a>
</div>
      </div>

</div>
        <!-- /.container -->


</div>
    <!-- /.content-section-a -->

    <div class="content-section-b"></div>
<!-- /.content-section-b -->

<a  name="penjual"></a>

<div class="content-section-a">

  <div class="container">

    <div class="row">
                <div class="col-lg-1 col-sm-2">
                <a href="Penjual.php"><h1>Penjual</h1>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                </a>
                </div>
                <div class="col-lg-3 col-lg-offset-0 col-sm-2">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><img class="img-responsive" src="img/penjual.jpg" width="200" height="250"></p>
                    <p>Nama	: PHH Laguboti</p>
                    <p>Tempat: Laguboti</p>
                </div>
                <div class="col-lg-3 col-lg-offset-0 col-sm-2">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><img class="img-responsive" src="img/penjual.jpg" width="200" height="250"></p>
                    <p>Nama	: Kilang Padi Hutahaean</p>
                    <p>Tempat:Laguboti</p>
                </div>
                <div class="col-lg-3 col-lg-offset-0 col-sm-2">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><img class="img-responsive" src="img/penjual.jpg" width="200" height="250"></p>
                    <p>Nama	: UD. Balige Jaya </p>
                    <p>Tempat: Laguboti</p>
                </div>
              <div class="col-lg-0 col-lg-offset-0 col-sm-2">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><img class="img-responsive" src="img/penjual.jpg" width="200" height="250"></p>
                    <p>Nama	:KP Situmorang</p>
                    <p>Tempat: Laguboti </p>
              </div>

      </div>

<a href="PenjualAdmin.php">
<h3>&nbsp;</h3>
<h3>Lihat penjual lainnya...</h3>
</a>
    </div>
        <!-- /.container -->

</div>
     <div class="content-section-b"></div>

<a  name="kategori"></a>
<div class="col-lg-1 col-sm-2">
                <a href=""><h1 style="color:#F8F8F8">ss</h1>
                <p>&nbsp;</p>
                </a>
</div>
<div class="content-section-a">
<p><h1 style="color:#337AB7">INFORMASI SEPUTAR PERTANIAN</h1>
<p style="color:#337AB7">&nbsp;</p>
<span class="container">

<table align="center" width="300" cellspacing="100" border="0">
  <tbody>
    <tr>
      <th scope="col"><a href="pupukAdmin.php"><img  class="img-circle"  src="img/pupk.jpg" width="250" height="250" alt="oala"><p align="center">PUPUK</p></a></th>
      <th><p style="color:#FDFDFD">..........</p></th>
       <th><p style="color:#FDFDFD">.....1............</p></th>
      <th scope="col"><a href="hamaAdmin.php"><img class="img-circle" src="img/waw.jpg" width="250" height="250"><p align="center">HAMA</p></th></a>
       <th><p style="color:#FDFDFD">.................</p></th>
      <th scope="col"><a href="bibitAdmin.php"><img class="img-circle" src="img/bibit.jpg" width="250" height="250"><p align="center">BIBIT</p></th></a>
    </tr>
  </tbody>
</table>
</span>

  </span></p>
</div>
<!-- /.container -->

<!-- /.content-section-a -->

	<a  name="contact"></a>
<div class="banner">

  <div class="container">

            <div class="row">
                <div class="col-lg-12">
                  <p align="center"><img src="img/SITONI.png" alt="" width="219" height="109" /></p>

                </div></div>

    </div>


    <p style="text-align:center">© 2017 Sistem Informasi Tauke dan petani.Mahasiswa IT DEL. All Rights Reserved. </p>
    </div>
    <!-- /.banner -->

    <!-- Footer -->

    <!-- jQuery -->

</body>

</html>
