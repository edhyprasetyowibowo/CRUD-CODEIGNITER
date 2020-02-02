<!DOCTYPE html>
<html>
<head>
	<title>Membuat Edit data dengan CodeIgniter</title>
</head>
<body>
	<center>
		<h1>Membuat Edit data dengan CodeIgniter</h1>
		<h3>Edit Data</h3>
	</center>
	<form action="<?php echo base_url(). 'index.php/profil/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $profil->id ?>">
					<input type="text" name="nama" value="<?php echo $profil->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $profil->alamat ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
</body>
</html>