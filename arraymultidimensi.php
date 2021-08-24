<?php

//array Multideimensi
echo "<h3>Array Multideimensi</h3>";

$matrik = [
	[2,3,4],
	[7,5,0],
	[4,3,0]

];
//cara mengakses isi
echo $matrik[1][0];


$artikel1 = [
	[
		"judul"=>"Belajar PHP dan MySQL Untuk Pemula",
		"penulis"=>"Digital Talent"
	],
	[
		"judul"=>"Turtorial PHP dari Nol Hingga Mahir",
		"penulis"=>"Digital Talent"
	],
	[
		"judul"=>"Membuat Aplikasi WEB denga PHP",
		"penulis"=>"Digital Talent"
	],

];
//menampilkan array
foreach ($artikel1 as $key => $value) {
	echo "<h3>".$value["judul"]."</h2>";
	echo "<p>".$value["penulis"]."</p>";
	echo "<hr>";

}





 ?>


