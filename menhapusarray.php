<?php
echo "<hr><h3>Menghapus Array</h3>";

$hewan = [
	"Burung",
	"Kucing",
	"Ikan"
];
//MEnnghapus Ikan
unset($hewan[1]);

echo $hewan[0]."<br>";
echo $hewan[1]."<br>";
echo $hewan[2]."<br>";

echo "<hr>";
echo "<pre>";
print_r($hewan);

echo "</pre>";

?>