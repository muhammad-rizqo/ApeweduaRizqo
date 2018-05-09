<?php 

	$Variable_A = 7;
	$Variable_B = 6;

	$Variable_C = $Variable_A - $Variable_B;

	if($Variable_C == 1){
		echo "Hasilnya adalah $Variable_C";
	}

	echo "<br>";

	$Variable_D = $Variable_A + $Variable_B;

	echo "Hasilnya adalah $Variable_D";

	echo "<br>";

	if($Variable_D == 1) {
		echo "Hasilnya adalah 1";
		echo "<br>";
	}
	elseif ($Variable_D == 13 ) {
		echo "Hasilnya adalah 13";
		echo "<br>";
	}

	else {
		echo "Hasil tidak sama dengan 1 atau 13";
		echo "<br>";
	}

	$Variable_E = $Variable_A - $Variable_B;

	if($Variable_E == 1) {
		echo "Hasilnya adalah 1";
		echo "<br>";
	}
	elseif ($Variable_E == 13 ) {
		echo "Hasilnya adalah 13";
		echo "<br>";
	}

	else {
		echo "Hasil tidak sama dengan 1 atau 13";
		echo "<br>";
	}

	# Array
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

	echo "<br>";
	echo $prodi[0]['id'];
	echo "<br>";
	echo $prodi[0]['nama'];
	echo "<br>";
	echo $prodi[0]['kuota'];
	echo "<br>";
	echo $prodi[0]['kaprodi'];
	echo "<br>";
	echo "<br>";

	echo $prodi[1]['id'];
	echo "<br>";
	echo $prodi[1]['nama'];
	echo "<br>";
	echo $prodi[1]['kuota'];
	echo "<br>";
	echo $prodi[1]['kaprodi'];
	echo "<br>";
	echo "<br>";

	echo $prodi[2]['id'];
	echo "<br>";
	echo $prodi[2]['nama'];
	echo "<br>";
	echo $prodi[2]['kuota'];
	echo "<br>";
	echo $prodi[2]['kaprodi'];
	echo "<br>";
	echo "<br>";

	echo $prodi[3]['id'];
	echo "<br>";
	echo $prodi[3]['nama'];
	echo "<br>";
	echo $prodi[3]['kuota'];
	echo "<br>";
	echo $prodi[3]['kaprodi'];
	echo "<br>";
	echo "<br>";

	echo $prodi[4]['id'];
	echo "<br>";
	echo $prodi[4]['nama'];
	echo "<br>";
	echo $prodi[4]['kuota'];
	echo "<br>";
	echo $prodi[4]['kaprodi'];
	echo "<br>";
	echo "<br>";

	echo $prodi[5]['id'];
	echo "<br>";
	echo $prodi[5]['nama'];
	echo "<br>";
	echo $prodi[5]['kuota'];
	echo "<br>";
	echo $prodi[5]['kaprodi'];
	echo "<br>";
	echo "<br>";

	echo $prodi[6]['id'];
	echo "<br>";
	echo $prodi[6]['nama'];
	echo "<br>";
	echo $prodi[6]['kuota'];
	echo "<br>";
	echo $prodi[6]['kaprodi'];
	echo "<br>";
	echo "<br>";

	echo "<pre>";
	echo var_dump($prodi);
	echo "</pre>";
?>