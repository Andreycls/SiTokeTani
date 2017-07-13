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
    <link href="css/landing-pageP.css" rel="stylesheet">





    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel='shortcut icon' href='img/SITONI.png' type='image/x-icon'/ >

</head>

<body>

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
                     <a href="Index.php"><p >Beranda</p></a>

                    </li>

                    <li>

                        <a href="content.php"><p style="color:#0A49F3">Pasar</p> </a>
                    </li>

                    <li>

                        <a href="kebutuhan.php#kebutuhan">Kebutuhan </a>
                    </li>
                     <li> <div id="button"><a href="#popup">Login</a></div>
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
                        <h1>Penjual </h1>

                        <hr class="intro-divider">
                         <h3>Sistem Informasi Tauke dan Petani</h3>

                         
                         </input> </fieldset> </div>


<html>
<head>



    <div id="popup">
    	 <div class="window">
    <a href="#" class="close-button" title="Close">X</a>
            <form action="login.php" method="POST">
            <h2 style="color:#000000">Login	</h2>
            <p style="color:#000000">&nbsp;</p>
            <p style="color:#000000">Username : <input type="text" name="username" style="color:#000000" placeholder="Masukkan username" required="required"></input></p>
            <p style="color:#000000">Password :
              <input type="password" name="password" style="color:#000000"  placeholder="Masukkan password" required="required">
            </p>

            <p style="color:#000000">&nbsp;</p>
            </form>

        </div>
    </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">
<div class="navigasi">
  <p><a href="index.php">Beranda</a> > <a href="content.php">Pasar</a> > Penjual</p>
  <div class="container">
            <div class="row">

                <div class="col-lg-10 col-sm-12">
                    <h2>Data Penjual</h2>
                  <hr class="section-heading-spacer">
                    <div class="clearfix"></div>

                    <h2 class="section-heading"></h2>

                  </h2>

<table align="center" bordercolor="#E9E9E9" border="2" width="1000px" cellpadding="8">
<tr>
<th align="center" bgcolor="#B5EFAE" ><h3 align="center">Nama</h3></th>
<th align="center" bgcolor="#B5EFAE" ><h3 align="center">Alamat</h3></th>
<th align="center" bgcolor="#B5EFAE" ><h3 align="center">Nomor HP</h3></th>
<th align="center" bgcolor="#B5EFAE" ><h3 align="center">Nomor KTP</h3></th>
</tr>


<?php
// Load file koneksi.php
include "koneksi.php";

$query = "SELECT * FROM penjual"; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		//echo "<td><img src='img/".$data['nama']."' width='100' height='100'></td>";
		echo "<td align='center' bordercolor='#000000' bgcolor='#FFFFFF' >".$data['penjual']."</td>";
		echo "<td align='center' bgcolor='#FFFFFF'>".$data['alamat']."</td>";
		echo "<td align='center' bgcolor='#FFFFFF'>".$data['noHP']."</td>";
		echo "<td align='center' bgcolor='#FFFFFF'>".$data['noKTP']."</td>";
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
    <!-- /.content-section-a --><!-- /.content-section-b --><!-- /.content-section-a -->

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
