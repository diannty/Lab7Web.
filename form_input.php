<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>PHP Dasar</title>
</head>
<body>
<h2>Form Input</h2>
<form method="post">
 <label>Nama: </label>
 <input type="text" name="nama">
 <input type="submit" value="Kirim">
</form>
<?php
echo 'Selamat Datang Dian Tri Handayani' ;
?>
<h2>opertor</h2>
    <?php
    $gaji = 100000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji * $pajak);
    echo "Gaji Sebelum Pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawah pulang = Rp.$thp";
    ?>

    <h2>kondisi IF</h2>
    <?php
    $nama_Hari = date("1");
    if ($nama_Hari == "Sunday") {
        echo "Minggu";
    } elseif ($nama_Hari == "Monday") {
        echo "Senin";
    } else {
        echo "Selasa";
    }
    ?>

    <h2>Kondisi Switch</h2>
    <?php
    $nama_Hari = date("l");
    switch ($nama_Hari) {
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
        default:
            echo "Sabtu";
    }
    ?>

    <h2>perulangan for</h2>
    <?php
    echo "perulangan 1 sampai 10 <br />";
    for ($i = 1; $i <= 10; $i++) {
        echo "perulangan ke: " . $i . '<br />';
    }
    echo "perulangan Menurun dari 10 ke 1 <br />";
    for ($i = 10; $i >= 1; $i--) {
        echo "perulangan ke : " . $i . '<br />';
    }
    ?>

    <h2>perulangan While</h2>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i = 1;
    while ($i <= 10) {
        echo "Perulangan ke: " . $i . '<br />';
        $i++;
    }
    ?>

    <h2>perulangan donwhile</h2>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i = 1;
    do {
        echo "Perulangan ke: " . $i . '<br />';
        $i++;
    } while ($i <= 10);
    ?>