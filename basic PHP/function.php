<!DOCTYPE html>
<html>
<head>
	<title>Belajar Fungsi</title>
</head>
<body>
	<h1>Fungsi PHP</h1>
	<?php
		echo "hai hai";

		// function panggil(){
		// 	echo "--------------------";
		// 	echo "Sekolah koding";
		// 	echo "--------------------";
		// }

		// function jarak(){
		// 	echo "<br>";
		// }

		// function siswa($nama){
		// 	echo "Siswa tersebut namanya  " . $nama;
		// }

		// siswa("luthfi");
		// jarak();
		// panggil();
		// jarak();
		// panggil();
		// jarak();
		// panggil();

		// anonymous function adalah fungsi yang tidak punya nama
		// $data = function($text){
		// 	echo $text . "<br>";
		// };

		// $ngetik = $data;

		// $data("Moch luthfi pratama putra");
		// $data("Lulusan SMKN 1 KATAPANG");
		// $ngetik("Coba anonymous function");

		// callback function adalah memanggil fungsi yang sudah dijalankan
		function berteriak($text){
			echo "HALOOOOOOO <br>";
			//$text();
			call_user_func($text, "Nama saya LUTHFI");
		}

		$panggil = function($baru){
			echo $baru;
		};

		berteriak($panggil);

	?>
</body>
</html>
