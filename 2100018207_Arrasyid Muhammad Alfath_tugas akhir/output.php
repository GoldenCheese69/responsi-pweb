<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>Arrasyid Muhammad Alfath/2100018207</title>
</head>
<body>
 <div class="container">
        <div class="sidebar">
            <nav>
                <ul>
                    <li><a href="kalender.php">Kalender</a></li>
                    <li><a href="kalkulator.html">Kalkulator</a></li>
                    <li><a href="form.html">input from</a></li>
                    <li><a href="output.php">output data</a></li>   
                </ul>
            </nav>
        </div>
        <main class="content">
              <section class="hero">
                  <img src="UAD.png" alt="">
              <div class="hero-content">
                  <h1>Daftar Pengunjung</h1><br></h2>Isi dari Form</h2><br><br>   
<p>Halaman ini akan menampilkan datayang tersimpan di file data.txt mengunakan php</p>
<table width=" 60%" border="1">
    <tr>
        <td width="85">Nama</td>
        <td width="99">Kota Asal </td>
    </tr>
<?php
$file_handle = fopen("data.txt", "rb");

while (!feof($file_handle) ) {
    $line_of_text = fgets($file_handle);
    $parts = explode(';', $line_of_text);
    echo "<tr><td height='119'>$parts[0]</td><td>$parts[1]</td></tr>";
}
fclose($file_handle);
?>
</table>
<a href="responsi.html" class="action-btn">Halaman Awal</a>
              </div>
                </section>
        </div>
        
    </div>    
</body>
</html>