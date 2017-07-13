<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form Pendaftaran</title>
</head>
<?php
include "koneksi.php";
?>
<html>
	<head>
	<style type="text/css"> 
		body{
			background:url(img/ss.jpg);
			background-position:center;
			background-size:cover;
			}
		td{
			border: none;
		}
		
		</style>
	<tittle><b></b></tittle>
	</head>
	<body style='margin:20px;font:16px Arial;'>
	<center><a  style="float:right;" href = 'index.php'> <h6 style="color:#FFFFFF">Kembali ke Halaman utama</h6> </a>
	  <h2 style="color:#FFFFFF">FORM PENDAFTARAN SITONI</h2></center>
	<form method = 'POST' action='file:///E|/MINE/Kerjaan/Projek/ProjekIMK/submitcredit.php'>
	<center><table bgcolor="#B5EFAE" table border = '5px' cellspacing = '1' cellpadding = '10' style = 'color: #101; font-family : arial; font-size : 12px;'>
		 <tr>
			  <td> Username </td>
			  <td width = '5' align = 'center'> : </td>
			  <td> <input type = 'text' placeholder='Masukkan Username' name = "course_num" /> </td>
		  </tr>
		 <tr>
			  <td> Password </td>
			  <td align = 'center'> : </td>
			  <td> <input type = 'text' placeholder='Masukkan Password' name = "course_title" /> </td>
		  </tr>
		 <tr>
			  <td> Nama</td>
			  <td align = 'center'> : </td>
			  <td> <input type = 'text' placeholder='Masukkan Nama' name = "sem_taken" /> </td>
		  </tr>
          <tr>
              <td> Alamat</td>
			  <td align = 'center'> : </td>
			  <td> <input type = 'text' placeholder='Masukkan Alamat' name = "sem_taken" /> </td>
          </tr>
          <tr>
              <td> Jenis Hasil Tani</td>
			  <td align = 'center'> : </td>
			  <td> <input type = 'text' placeholder='Masukkan Jenis Hasil Tani' name = "sem_taken" /> </td>
          </tr>		
          <tr>
              <td> Nomor KTP</td>
			  <td align = 'center'> : </td>
			  <td> <input type = 'text' placeholder='Masukkan Jenis Hasil Tani' name = "sem_taken" /> </td>
          </tr>	
		 <tr>
			 <td colspan = '3' align = 'center'>
			 <input type = 'submit' name = 'submit' value = 'Daftar'/>
			 <input type = 'reset' name = 'Reset' value = 'Reset' /> </td>
		 </tr>
	</table>
	</form>
	</body>
</html>
<body>
</body>
</html>