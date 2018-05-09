<?php 
	$nama = "Rizqo";

	if($nama == "Rizqo"){ # == artinya membandingkan isi
		echo "Ya namanya Rizqo";
		echo "<br>";
	}

	if($nama === "Rizqo"){ # === artinya membandingkan isi dan tipe data
		echo "Ya Namanya Rizqo";
		echo "<br>";
	}


	# Penggunaan endif
	$nilai = 2;

	if($nilai === 2):
?>
<p>Ini adalah sebuah paragraf.</p>
<?php 
	endif;
?>