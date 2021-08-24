<?php

//membuaka File
echo "<hr><h3>Membuka File</h3>";

$file = fopen("wellcome.txt", "r");

fclose($file);


$file1 = fopen("wellcome.txt", "r");

echo fgets($file1);

fclose($file1);


$file2 = fopen("wellcome2.txt", "r");

echo "<br><h3>File open ke-2</h3>";
echo fgetss($file2);

fclose($file2);


//Membuak lanjutan
echo "<hr><h3>Membuka File Lanjutan</h3>";

$data  = "wellcome.txt";
$buka_file = fopen($data,"r");
if(!$buka_file){
	print("File $data Gagal Di Buka !!!");
	exit;
}while(!feof($buka_file)){
	$data = fgets($buka_file,50);

	print("$data <be>");
}
fclose($buka_file);




?>