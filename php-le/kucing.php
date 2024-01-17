<?php
#no 1
$nama_depan = "ian";
$nama_belakang = "rachman";
$usia = "17th";
$alamat = "yogyakarta";
$sekolah = "SMK MUHI";
$kelas = "XI";
$jurusan = "RPL";
$cita2 = "pebisnis";
$motivasi = "teruslah bernafas";
$hobi = "main game";

echo "nama lengkap saya $nama_depan $nama_belakang bisa di panggil $nama_depan, saya berusia $usia dan saya tinggal di $alamat, saya bersekolah di $sekolah kelas $kelas $jurusan, saya punya cita cita sebagai $cita2, motivasi hidup saya $motivasi, dan hobi saya $hobi<br><br><br>";

#no 2 
$barang1 = "sampo";
$harga1 = "Rp.6000";

$barang2 = "sisr";
$harga2 = "Rp.3000";

$barang3 = "kue";
$harga3 = "Rp.12000";


$pembeli1 = "dedi corbuzer";
$pembeli2 = "hapis";
$pembeli3 = "jauza";

echo "$pembeli1 membeli $barang1 dengan harga $harga1<br>";
echo "$pembeli2 membeli $barang2 dengan harga $harga2<br>";
echo "$pembeli3 membeli $barang3 dengan harga $harga3<br><br>";

#no 3
//string
$nama = "IAN";
//char
$jenis_kelamin = 'L';
//integer
$usia = 17;
//float
$tinggi = 166.7;
//boolean
$menikah = false;
//array
$mobil = ["scania", "mercy", "man"];
$Mobil = array("scania", "mercy", "man");

echo "$nama <br>";
echo "$jenis_kelamin<br>";
echo "$usia<br>";
echo "$tinggi<br>";
echo "$menikah<br>";
echo "$Mobil[1]<br>";
echo "$mobil[2]<br>";

#no 4
$barang ="bola";
$jumlah = 15;

unset($jumlah);

echo $jumlah;

#no 5 
define('DB_PELANGGAN', 'jauza');
define('DB_USER', 'buni');
const DB_PASS = "1234";
const DB_NAMA = "josnis";
const DB_SERVER = "localhost";

echo "<br>pelanggan : ".DB_PELANGGAN. "<br>";
echo "user : ".DB_USER. "<br>";
echo "password : ".DB_PASS. "<br>";
echo "nama : ".DB_NAMA. "<br>";
echo "serper : ".DB_SERVER. "<br>";