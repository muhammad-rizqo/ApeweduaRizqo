<!DOCTYPE html>
<html>
	<head>
		<title>Selamat</title>
	</head>
	<body>
		<h1>Selamat</h1>
		<p>Anda telah terdaftar di dalam sistem kami.</p>

		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><?php echo $_POST['username']; ?></td>
			</tr>

			<tr>
				<td>Password</td>
				<td>:</td>
				<td><?php echo $_POST['password']; ?></td>
			</tr>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo $_POST['nama']; ?></td>
			</tr>

			<tr>
				<td>No. Hp.</td>
				<td>:</td>
				<td><?php echo $_POST['no_hp']; ?></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?php echo $_POST['alamat']; ?></td>
			</tr>

			<tr>
				<td>Kabupaten</td>
				<td>:</td>
				<td><?php echo $_POST['kabupaten']; ?></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><?php echo $_POST['jenis_kelamin']; ?></td>
			</tr>

			<tr>
				<td>Prodi Pilihan</td>
				<td>:</td>
				<td><?php echo $_POST['prodi']; ?></td>
			</tr>
		</table>
	</body>
</html>
