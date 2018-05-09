<!DOCTYPE html>
<html>
<head>
	<title>Latihan Tabel</title>
</head>
<body>
<?php 
	$prodi = [
		[
			"id" => 0,
			"nama" => "Kimia",
			"kuota" => 12,
			"kaprodi" => "Andi"
		],
		[
			"id" => 1,
			"nama" => "Fisika",
			"kuota" => 14,
			"kaprodi" => "Nurhasana"
		],
		[
			"id" => 2,
			"nama" => "Biologi",
			"kuota" => 12,
			"kaprodi" => "Rizalinda"
		],
		[
			"id" => 3,
			"nama" => "Sisfo",
			"kuota" => 32,
			"kaprodi" => "Ilham"
		],
		[
			"id" => 4,
			"nama" => "Kelautan",
			"kuota" => 11,
			"kaprodi" => "Nora"
		],
		[
			"id" => 5,
			"nama" => "Statistika",
			"kuota" => 15,
			"kaprodi" => "Naomi"
		],
		[
			"id" => 6,
			"nama" => "Matematika",
			"kuota" => 12,
			"kaprodi" => "Mariatul"
		],
	];
?>

	<h1>Ini Latihan Tabel</h1>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Nama Prodi</td>
			<td>Kuota</td>
			<td>Kaprodi</td>
		</tr>
		
<?php 
	for ($i=1; $i <= 100; $i++) { 
?>	

		<tr>
			<td><?php echo $i ?></td>

			<td>Sisfo</td>

			<td><?php echo $i * 3 ?></td>
			<td>
			<?php if($i % 2 === 0) : ?>
				Ilhamsyah
			<?php else : ?>
				Renny
			<?php endif ; ?>
			</td>
		</tr>
	
<?php	
	}
?>

	</table>
</body>
</html>