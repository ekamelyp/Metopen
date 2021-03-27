<?php 
	echo("<h3>Membaca Isi File data.txt</h3>");
	print_r(file('data.txt')); 
	echo("<br><br>");

	echo("<h3>Menampilkan Isi File data.txt Berdasarkan Kolom</h3>");
	$file_name = 'data.txt';
	foreach (file($file_name) as $val) {
		$dataset[] = explode(",", $val);
	}
	print_r($dataset);
?>