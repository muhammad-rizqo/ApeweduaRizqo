<h1>Kumpulan Isi Kategori</h1>

<table border="1">
	<tr>
		<td>No. </td>
		<td>Nama Kategori</td>
	</tr>

	<?php foreach ($isi_kategori as $ik): ?> 
	<tr>
		<td><?= $ik['id_kategori'] ?></td>
		<td><?= $ik['nama_kategori'] ?></td>
	</tr>
	<?php endforeach; ?>

</table>