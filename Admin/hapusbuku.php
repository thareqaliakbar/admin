<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div id="container">
		<ul class="nav nav-pills nav-stacked sidebar">
			 <li role="presentation"><a href="index.php">Tambah Mahasiswa</a></li>
			 <li role="presentation"><a href="buku.php">Tambah Buku</a></li>
			 <li role="presentation"><a href="pinjam.php">Peminjaman Buku</a></li>
			 <li role="presentation"><a href="hapusmhs.php">Hapus Mahasiswa</a></li>
			 <li role="presentation" class="active"><a href="hapusbuku.php">Hapus Buku</a></li>
			 <li role="presentation"><a href="lihatdata.php">Lihat Data</a></li>
			 <li role="presentation"><a href="cari.php">Cari</a></li>
			 <li role="presentation"><a href="update.php">Update</a></li>
		</ul>
		<div id="content">
			<form method="POST">
				Id Buku	: <input type="text" name="id" class="form-control"/>
				<br>
				<br>
				<input type="submit" name="submit" value="Hapus" />
			</form>

			<?php
				if (isset($_POST['submit'])){
					$id = $_POST['id'];
					include ('1.php');
					$hapus=mysqli_query($link,"DELETE FROM buku WHERE Id_buku = '$id'");
			
					if($hapus==true){
						echo " Data berhasil terhapus";
					}else{
						echo " Data tidak terhapus";
					}
				}
			?>
		</div>
	</div>
</body>
</html>