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
                  <h1>Kalender</h1><br></h2></h2><br><br>   
<p>Halaman ini akan menampilkan kalender yang dibuat mengunakan php,kalender dapat mengetahuan tanggal berapa hari ini</p>
<?php
    $hari = date("d");
    $bulan = date("m");
    $tahun = date("Y");
    $jumlahhari = date("t", mktime(0,0,0,$bulan,$hari,$tahun));
?>

<?php
switch ($bulan)
{
    case 1 : $nmbulan = "Jan"; break;
    case 2 : $nmbulan = "Feb"; break;
    case 3 : $nmbulan = "Mar"; break;
    case 4 : $nmbulan = "Apr"; break;
    case 5 : $nmbulan = "Mei"; break;
    case 6 : $nmbulan = "Jun"; break;
    case 7 : $nmbulan = "Jul"; break;
    case 8 : $nmbulan = "Agu"; break;
    case 9 : $nmbulan = "Sep"; break;
    case 10 : $nmbulan = "Okt"; break;
    case 11 : $nmbulan = "Nov"; break;
    case 12 : $nmbulan = "Des"; break;
}
echo "<center><h2>$nmbulan $tahun </h2></center>";
?>

<br>
<table style="border:1px solid black" align="center" cellpadding = "10">
<tr style="background-color: #eff1f2;">
    <td align="center"><font color = "FF0000">Min</font></td>   
    <td align="center">Sen</td>
    <td align="center">Sel</td>
    <td align="center">Rab</td>
    <td align="center">Kam</td>
    <td align="center">Jum</td>
    <td align="center">Sab</td>
</tr>
<?php 
$hariini = date("d");
$s=date ("w", mktime(0,0,0,$bulan,1,$tahun));
for ($ds=1; $ds<=$s;$ds++)
{
    echo"<td></td>";
}

for ($d=1; $d <= $jumlahhari; $d++)
{
    if (date("w", mktime(0,0,0,$bulan,$d,$tahun))==0)
    {
        echo"<tr>";
    }
        $warna = "#000000";
        $sel = "#ffffff";
    if(date ("l",mktime(0,0,0,$bulan,$d,$tahun))=="Sunday")
    {
        $warna = "#FF0000";
    }
    if($hariini == $d)
    {
        $warna = "blue";
        $sel = "coral";
    }
    echo"<td align=center valign=middle bgcolor=$sel> <span style=\"color:$warna\">$d</span></td>";

    if (date("w",mktime(0,0,0,$bulan,$d,$tahun))==6)
    {
        echo "</tr>";
    }
}

echo "</table>";
?>
<a href="responsi.html" class="action-btn">Halaman Awal</a>
              </div>
                </section>
        </div>
        
    </div>    
</body>
</html>