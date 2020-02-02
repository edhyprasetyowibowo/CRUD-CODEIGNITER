<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan data dari database pada codeigniter</title>
</head>
<body>
	<center>
		<h1>Menampilkan data dari database pada codeigniter</h1>
	</center>
	<center><?php echo anchor('profil/add','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($profil as $row){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $row->nama ?></td>
			<td><?php echo $row->alamat ?></td>
			<td>
				<?php echo anchor('profil/edit/'.$row->id,'Edit Data'); ?> / 
				<?php echo anchor('profil/delete/'.$row->id,'Hapus Data'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>