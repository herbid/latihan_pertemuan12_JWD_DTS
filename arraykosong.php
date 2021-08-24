<?php
echo "<h3>Array</h3>";
//membuat array kosong
$buah = array();
$hobi = [];

//membuat array dan mengisi array
$minuman = array("Kopi","Teh","Jus Jeruk");
$makanan = ["Nasi Goreng","Soto","Bubur"];

//membuat array dengan mengisi index tertentu
$anggot[1]= "Joko";
$anggot[2]= "Ruddy";
$anggot[0]= "USman";

$item = ["Bunga",123,39.12,true];

$barang = ["Buku Tulis","Penghapus","Spidol"];

echo $barang[0]."<br>";
echo $barang[1]."<br>";
echo $barang[2]."<br><br>";

//menggunakan dengan perulangan For

for ($i=0; $i < count($barang); $i++) { 
	echo $barang[$i]."<br>";
}

echo "<hr>";
//menggunakan dengan perulangan While
$i=0;
while ($i < count($barang)) {
	echo $barang[$i]."<br>";
	$i++;
}
?>