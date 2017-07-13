
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

                	<a> <img src="img/asemm.png" width="40" height="40" alt=""/>SITONI</a>
        

          </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                     <a href="Index.php"><p >Beranda</p></a>
                        
                    </li>
                    <li>
                       
                        <a href="dashboard.php">Dashboard</a>
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
                        <h1>Produk</h1>
                        <hr class="intro-divider">	
                         <h3>Sistem Informasi Tauke dan Petani</h3>
                                 
                         <h4 style="color:#F7F7F7">Ketikan Apa yang ingin anda cari:</h4>
                         
                         <input type="text" placeholder="Cari.." value style="color:#8B8686" ="Pencarian" ><button style="color:#17A81A">Search</button></input> </fieldset> </div>
                         
                        
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

	<a  name="services"></a>    
    <div class="content-section-a">   

        <div class="container">
            <div class="row">
            
                <div class="col-lg-10 col-sm-12">
                  <h1>Data Produk</h1>
                    <hr>
<a href="formProduk.php">Tambah Produk</a><br>
<br>
<table align="center" width="900" border="8"  cellpadding="10" style="border-color:#000000">
<tr>
	<th ><h3>Gambar</h3></th>
	<th><h3>Nama Produk</h3></th>
	<th><h3>Jenis Produk</h3></th>
	<th><h3>Penjual</h3></th>
</tr>

<?php
// Load file koneksi.php
include "koneksi.php";

$query = "SELECT * FROM gambar"; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td><img src='img/".$data['nama']."' width='250' height='150'></td>";
		echo "<td>".$data['namaProduk']."</td>";
		echo "<td>".$data['ukuran']."</td>";
		echo "<td>".$data['tipe']."</td>";
		echo "</tr>";
	}
}else{ // Jika data tidak ada
	echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
.</table>
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
                <div class="col-lg-6">
                  <h2>Connect to My Web:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Contact 1</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                        <a href="andreyasemjr.blogspot.com" class="btn btn-default btn-lg"><i class="fa fa-headphones fa-fw"></i> <span class="network-name">Blogger</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                           </li>
                        
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    
</body>

</html>
    