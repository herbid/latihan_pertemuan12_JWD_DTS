<?php

//array asosiatif
echo "<hr><h3>Array Asosiatif</h3>";
//membuat array asosiatif
$artikel = [
	"judul" => "Belajar Pemrograman PHP",
	"penulis" => "Digital Talent",
	"view" => 128
];
//mencetak array asosiatif
echo "<h3>".$artikel["judul"]."</h2>";
echo "<p>".$artikel["penulis"]."</p>";
echo "<p>".$artikel["view"]."</p>";


//array asosiatif dengan tanda =

$email["subjek"] = "Apa Kabar";
$email["pengirim"] = "joko334@gmail.com";
$email["isi"] = "Apa Kabar ? Lama Tidak Jumpa";

echo "<pre>";
print_r($email);
echo "</pre>";


?>