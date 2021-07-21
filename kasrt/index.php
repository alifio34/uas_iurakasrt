<!DOCTYPE html>
<html>
<head>
	<title>Data warga</title>
</head>
<body>
	<div style="margin 0 auto; width: 80%;">
	<h2 align="center">Data Warga</h2>
	<a href="forminput.php">Tambah Data</a>
	<table border="1" cellspacing="0" width="100">
		<tr style="text-align: center; font-weight: bold; background-color: #eee; font-family: sans-serif;">
			<td>ID</td>
			<td>NIK</td>
			<td>NAMA</td>
			<td>alamat</td>
			<td>KElamin</td>
			<td>norumah</td>
			<td>STATUS</td>
		</tr>

		<?php
		include'koneksi.php';
		$no = 1;
		$tampil = mysqli_query($connection, "SELECT * FROM tb_warga1");
		if (mysqli_num_rows($tampil)>0) {
		while($hasil = mysqli_fetch_array($tampil)){
		?>

<tr style="text-align: center; font-family: sans-serif;">
	<td><<?php echo $no++ ?></td>
	<td><?php echo $hasil ['id'] ?></td>
	<td><?php echo $hasil ['nama'] ?></td>
	<td><?php echo $hasil ['alamat'] ?></td>
	<td><?php echo $hasil ['jeniskelamin'] ?></td>
	<td style="font-weight: bold; color: #00008">
		<a href="edit.php?nik=<?php echo $hasil [nik] ?>">edit</a>
		<a href="hapus.php?nik=<?php echo $hasil [nik] ?>">hapua</a>
	</td>
<?php }}else{ ?>
	<tr>
		<td colspan="7" align="center">Data Kosong</td>
		</tr>
<?php } ?>
</body>
</html>