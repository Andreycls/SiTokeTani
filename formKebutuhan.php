<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="TokeTani" content="">
    <meta name="Port&SSL" content="24">

    <title>SiTokeTani </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">





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

                	<a href="index.php"> <img src="img/Sitoni.png" width="80" height="40" alt=""/></a>


          </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                     <a href="IndexAdmin.php"><p>Beranda</p></a>

                    </li>
                    <li>

                        <a href="contentAdmin.php"><p style="color:#337AB7">Pasar</p></a>
                    </li>

                    <li>

                        <a href="kebutuhanAdmin.php" class="smoothScroll">Kebutuhan </a>
                    </li>
                    <li>
                     <a href="dashboardAdmin.php"><p  >Menu Utama</p></a>

                   </li>


                    <li> <div id="buttonLogout"><a href="index.php">Keluar</a></div>
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
                        <h1>PRODUK </h1>
                        <hr class="intro-divider">
                         <h3>Sistem Informasi Tauke dan Petani</h3>




<html>
<head>
    <div id="popup">
    	<div class="window">
        	<a href="#" class="close-button" title="Close">X</a>
            <form action="login.php" method="get">
            <h2 style="color:#000000">Login	</h2>
            <p style="color:#000000">&nbsp;</p>
            <p style="color:#000000">Username : <input type="text" name="username" style="color:#000000" placeholder="Masukkan username" required="required"></input></p>
            <p style="color:#000000">Password :
              <input type="password" name="password" style="color:#000000"  placeholder="Masukkan password" required="required">
            </p>
            <div id="button"><a href="Index.php">Masuk</a></div>
            <p style="color:#000000">Belum mempunyai akun? Silahkan <a href="daftar.php">daftar</a></p>
            </form>

        </div>
    </div>
    <ul class="list-inline intro-social-buttons">
              <li>

                            </li>
                            <li>
                            <li>


                            <li>
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
      <p><a href="dashboardAdmin.php">Menu Utama</a> > <a href="kebutuhanAdmin.php">Kebutuhan</a> > formKebutuhan</p>

    </div>
	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-sm-12">
                    <p><u>Nama pemohon*</u> diisi dengan format Nama(Nomor Telepon) contoh : Andrey(081362414252)</p>
                    <h2>&nbsp;</h2>
                    <h2>FORM PENAMBAHAN KEBUTUHAN</h2>
                  <hr class="section-heading-spacer">
                    <div class="clearfix"></div>

                    <h2 class="section-heading"></h2>
                    </h2>
                  <p>&nbsp;</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <form method="POST"  enctype="multipart/form-data" action="uploadK.php">
                <table width="200" border="1">
  <table align="center" border="0" width="800">
    <tr>
      <th scope="col"><h3>Nama Produk</h3></th>
      <th scope="col"><input width="200" type="text" name="nama" placeholder="Contoh : Jeruk Bali"></input></th>
    </tr>
    <tr>
      <td><h3>Penjelasan</h3></td>
      <td> <input width="300" type="text"  name="penjelasan" placeholder="Contoh : Buah - Buahan"></input></td>
    </tr>
    <tr>
      <td><h3>Nama pemohon</h3></td>
      <td><input width="200" type="text" name="konsumer" placeholder="Contoh : UD.Balige Jaya"></td>
    </tr>
    <tr>
      <td><h3>Alamat</h3></td>
      <td><input width="200" type="text" name="alamat" placeholder="Contoh : UD.Balige Jaya"></td>
    </tr>

    <tr>
      <td><h3>Lampiran Gambar</h3></td>
      <td><input width="200" type="file" name="gambar" placeholder="letakkan file disini"></input></td>
    </tr>

</table>

                  <p>&nbsp;</p>
                    <p>
                      </input>
                      <button type="submit" value="upload" style="color:#078F09" onClick="confirm('Data Berhasil ditambah')" >Tambah</button>

                    </p>
                </form>






              </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

              <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              </div>
                <h3 class="section-heading">&nbsp;</h3>
                <div class="clearfix"></div>
              </div>

            </div>

      </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

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
