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
                     <a href="dashboardAdmin.php"><p style="color:#337AB7">Menu Utama</p></a>

                    </li>

                    <li> <div id="buttonLogout" onClick="confirm('Akun Berhasil Keluar')"><a href="logout.php">Keluar</a></div>
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
                        <h1>MENU UTAMA </h1>
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
                                <a href="contentAdmin.php" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Pasar</span></a>
                            </li>
                            <li>
                              <a href="formProduk.php" class="btn btn-default btn-lg"><em class="fa fa-github fa-fw"></em> <span class="network-name">Tambah Produk</span></a> </li>
                            <li>
                            <a href="produkAdmin.php" class="btn btn-default btn-lg"><em class="fa fa-github fa-fw"></em> <span class="network-name">Lihat Daftar Produk</span></a></li>
                            <li>
                            <li>
                              <a href="penjualAdmin.php" class="btn btn-default btn-lg"><em class="fa fa-github fa-fw"></em> <span class="network-name">Lihat Penjual</span></a> </li>
                              <li>
                              <a href="KebutuhanAdmin.php" class="btn btn-default btn-lg"><em class="fa fa-github fa-fw"></em> <span class="network-name">Lihat Kebutuhan</span></a> </li>
                            <p></p>
                              <li>
                                <a href="contentAdmin.php#kategori" class="btn btn-default btn-lg"><em class="fa fa-github fa-fw"></em> <span class="network-name">Informasi Seputar Pertanian</span></a> </li>


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


              </div>

            </div>

      </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    </div>
    <!-- /.content-section-a -->



    <!-- Footer -->

    <!-- jQuery -->

</body>

</html>
