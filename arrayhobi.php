<?php

echo "<hr><h3>Menambahkan Isi Array</h3>";

$hobi = [
	"Membaca",
	"Menulis",
	"Ngeblog"
];

$hobi[3] = "Coding";

$hobi[]="Olahraga";

foreach ($hobi as $hobiku ) {
	echo $hobiku."<br>";
}

//User array
$user = [
	"Komeng",
	"Medi",
	"Usman"
];

$user[1] = "Evans";

//mencetak Array index ke -1
echo "<pre>";
print_r($user);
echo "</pre>";



?>