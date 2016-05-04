<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Mahasiswa</title>
</head>
<body>
	<a href="#">Tambah Data</a>
	<table border='1' style="border-collapse:collapse; width:50%">
		<tr style="background:grey";>
			<th>NPM</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Aksi</th>
			
		</tr>
		<?php foreach ($data as $d) { ?>
		<tr>
			<td><?php echo $d['npm']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['alamat']; ?></td>
			<td><a href="<?php echo base_url()."index.php/Crud/edit_data/".$d['npm']; ?>">Edit</a> || 
				<a href="<?php echo base_url()."index.php/Crud/delete_data/".$d['npm']; ?>">Hapus</a></td>
		</tr>

		<?php } ?>
	</table>
	
</body>
</html>