<?php
$json_data=file_get_contents("danang.json");
$obj = json_decode($json_data);
echo "Nim : "; echo $obj->nik;
echo "<br>";
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "Alamat : "; echo $obj->alamat;
echo "<br>";
echo "No Hape : "; echo $obj->no_hp;
echo "<br>";
echo "Nama makul pertama: ";echo $obj->mata_kuliah[0];
echo "<br>";
echo "Nama makul kedua: ";echo $obj->mata_kuliah[1];
echo "<br>";
echo "Nama makul ketiga: ";echo $obj->mata_kuliah[2];
echo "<br>";
?>