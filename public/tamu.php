<?php // filename:  write1.php
// file yang akan dibaca
$filename = "tamu.txt";
// buka file
$fd = fopen($filename,"a") or die("Can’t open file $filename");
// isi file yang akan dituliskan
$nama           = $_POST['nama'];
$email          = $_POST['email'];
$nomor          = $_POST['nomor'];
$alamat         = $_POST['alamat'];
// tulis isi file
$data = "\n
| Nama          : $nama 
| E-mail        : $email 
| Nomor HP      : $nomor        
| Alamat        : $alamat       
|-----------------------------------------------------------------";
fwrite ($fd, $data) or die("Can’t write to file $filename");

//$fstring = fread($fd, filesize($filename));
// tutup file

// tutup file
fclose($fd);
// tampilkan isi file
header("Refresh:0; url=../");
//echo "<h1>".$fstring."</h1>";

?>