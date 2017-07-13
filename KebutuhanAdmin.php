
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
    <link href="css/landing-pageK.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>





    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel='shortcut icon' href='img/SITONI.png' type='image/x-icon'/ >

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

                	<a> <img src="img/SITONI.png" width="80" height="40" alt=""/></a>


          </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   <li>
                     <a href="IndexAdmin.php"><p  >Beranda</p></a>

                    </li>

                    <li>

                        <a href="contentAdmin.php"><p >Pasar</p> </a>
                    </li>

                    <li>

                        <a href="kebutuhanAdmin.php#kebutuhan"><p style="color:#0A49F3">Kebutuhan</p> </a>
                    </li>
                    <li>
                       <a href="dashboardAdmin.php"><p  >Menu Utama</p></a>


                      </li>

                     <li> <div id="buttonLogout"><a href="indexAdmin.php">Keluar</a></div>
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
                    <div class="intro-message">
                        <h1>KEBUTUHAN</h1>
                        <hr class="intro-divider">
                         <h3>Sistem Informasi Tauke dan Petani</h3>





<head>



    <div id="popup">
    	<div class="window">
        	<a href="#" class="close-button" title="Close">X</a>
            <h2 style="color:#000000">Login	</h2>
            <p style="color:#000000">&nbsp;</p>
            <p style="color:#000000">Username : <input type="text" style="color:#000000"></input></p>
            <p style="color:#000000">Password: <input type="password" style="color:#000000"></input></input>
            </p>
            <div id="button"><a href="Index.html">Masuk</a></div>
            <p style="color:#000000">Belum mempunyai akun? Silahkan <a href="index.html">daftar</a></p>


        </div>
    </div>


                        <ul class="list-inline intro-social-buttons">
                            <li>

                            </li>

                            <li> </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->
    <div class="navigasi">
          <p><a href="index.php">Beranda</a> > <a href="content.php">Pasar</a> > Kebutuhan</u></p>

        </div>

	<a  name="kebutuhan"></a>
    <div class="content-section-a">

<div class="col-lg-10 col-sm-12" style="float:left"><a href="formKebutuhan.php">
  <h4>Tambah Kebutuhan</h4>
         </a>

      </div>
        <div class="container">

            <div class="row">

                <div class="col-lg-11 col-sm-5" style="float:left" >


                  <h1>Data Kebutuhan</h1>
                    <hr>

<table bordercolor="#E9E9E9" border="2" width="1240px" cellpadding="8">
<tr>
	<th bgcolor="#B5EFAE" width="175" ><h3 align="center">Gambar</h3></th>
	<th bgcolor="#B5EFAE" width="204"><h3 align="center">Nama Produk</h3></th>
	<th bgcolor="#B5EFAE" width="338"><h3 align="center">Penjelasan</h3></th>
    <th bgcolor="#B5EFAE" width="292"><h3 align="center">Nama pemohon</h3></th>
    <th bgcolor="#B5EFAE" width="163"><h3 align="center">Alamat</h3></th>


</tr>

<?php
// Load file koneksi.php
include "koneksi.php";

$query = "SELECT * FROM kebutuhan"; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td><p align='center'><img src='img/".$data['nama']."' width='250' height='150'></p></td>";
		echo "<td><p align='center'>".$data['NamaProduk']."</p></td>";
		echo "<td><p align='center'>".$data['spesifikasi']."</p></td>";
		echo "<td><p align='center'>".$data['konsumen']."</p></td>";
		echo "<td><p align='center'>".$data['alamat']."</p></td>";


		echo "</tr>";
	}
}else{ // Jika data tidak ada
	echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6"></div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a --><!-- /.content-section-b -->

    <div class="content-section-a"><!-- /.container -->

    </div>
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
