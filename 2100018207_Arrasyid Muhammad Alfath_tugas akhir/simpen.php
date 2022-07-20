<?php
include("form.html");
$nama=$_POST['nama'];
$asal=$_POST['asal'];

$dataku=fopen("data.txt", "a");
$data=$nama.";".$asal."\n";
fwrite($dataku, $data);
fclose($dataku);
echo "<pre>";
echo "<pre>"
?>