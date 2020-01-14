<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title;?></title>
</head>
<body>
	<h2><?= $judul; ?></h2>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Email</th>
			<th>No. Handphone</th>
			<th>Program Studi</th>
			<th>Fakultas</th>
			<th colspan="2">
				<button style="background-color: white; color: black; border: 2px solid black; font-weight: bold; font-family: times new roman; font-size: 15px;"><a style="text-decoration: none; color: black; " href="<?= site_url('home/insert')?>">Tambah</a></button>	
			</th>

		</tr>
		<?php foreach ($mahasiswa as $row) : ?>
		<tr>
			<td><?= $row->nim; ?>   </td>
			<td><?= $row->nama_lengkap; ?> </td>
			<td><?= $row->email; ?> </td>
			<td><?= $row->no_handphone; ?> </td>
			<td><?= $row->nama_program_studi; ?></td>
			<td><?= $row->fakultas_name; ?></td>
			<th>
				<a style="text-decoration: none; color: black;" href="<?= site_url('home/edit/' . $row->nim) ?>">Edit</a>
			</th>
			<th>
				<a style="text-decoration: none; color: black; " href="<?= site_url('home/delete/' . $row->nim) ?>" onclick="return confirm('apakah anda yakin akan menghapus data ini?')">Delete</a>
			</th>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>