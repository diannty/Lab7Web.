<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas dan Pertanyaan</title>
    <style>
        form div > label {
            display: inline-block;
            width: 100px;
            height: 30px;
        }
        form input[type="text"], form textarea {
            border: 1px solid #197a43;
        }
        form input[type="submit"] {
            border: 1px solid #197a43;
            background-color: #197a43;
            color: #ffffff;
            font-weight: bold;
            padding: 5px 15px;
        }
        form input[type="reset"] {
            border: 1px solid #197a43;
            background-color: #197a43;
            color: #ffffff;
            font-weight: bold;
            padding: 5px 12px;
        }
    </style>
</head>
<body bgcolor="dcdcdc">
    <header>
        <h1>Perhitungan Gaji Karyawan</h1>
    </header>
        <form method="post" action="">
    <fieldset>
        <legend>Data Karyawan</legend>  
            <div style="margin-left">
                Nama Karyawan : <input type="text" name="nama" /><br /> <br />
                Tanggal lahir : <input type="text" name="lahir" /><br /> <br />
                Jabatan : <input type="radio" name="jabatan" value="Staff"/>Staff
                <input type="radio" name="jabatan" value="Leader"/>Leader
                <input type="radio" name="jabatan" value="Manager"/>Manager
                <input type="radio" name="jabatan" value="Direktur"/>Direktur<br /><br />  
                Jam Kerja (Jam) : <input type="text" name="jam_kerja" /><br /><br />
                <input type="submit" name="submit" value="Submit" />
            </div>
            <div style="margin-left">
            <?php
                if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    $gol = $_POST['jabatan'];
                    $jam_kerja = $_POST['jam_kerja'];
                    //umur
                    // tanggal lahir
                    $tanggal = new DateTime('1998-11-14');
                    // tanggal hari ini
                    $today = new DateTime('today');
                    // tahun
                    $y = $today->diff($tanggal)->y;
                    // bulan
                    $m = $today->diff($tanggal)->m;
                    // hari
                    $d = $today->diff($tanggal)->d;
 
                    //gaji
                    $gaji_pokok_staff = $jam_kerja*4000;
                    $gaji_pokok_leader = $jam_kerja*5000;
                    $gaji_pokok_manager = $jam_kerja*6000;
                    $gaji_pokok_direktur = $jam_kerja*7500;
 
                    //perhitungan untuk jam lembur
                    if($jam_kerja <= 48){
                        $jam = $jam_kerja;
                        $lembur = 0;
                    }else{
                        $jam =  48;
                        $lembur = ($jam_kerja - $jam) * 3000;
                    }
 
                    //gaji lembur
                    $gaji_lembur_staff = 15000 * $lembur;
                    $gaji_lembur_leader = 20000 * $lembur;
                    $gaji_lembur_manager = 25500 * $lembur;
                    $gaji_lembur_direktur = 30150 * $lembur;
 
                    //gaji akhir yang diterima
                    $gaji_staff = $gaji_pokok_staff + $gaji_lembur_staff ;
                    $gaji_leader = $gaji_pokok_leader + $gaji_lembur_leader ;
                    $gaji_manager = $gaji_pokok_manager + $gaji_lembur_manager ;
                    $gaji_direktur = $gaji_pokok_direktur + $gaji_lembur_direktur ;
 
                    echo "Nama Karyawan  : $nama <br/> ";
                    echo "Umur: " . $y . " tahun " . $m . " bulan " . $d . " hari <br/>";
                    echo "Jabatan   : $gol <br/> ";
                    echo "Jam Kerja : $jam_kerja <br/>";
                    echo "Lembur : $lembur <br/>";
                    echo "Umur: " . $y . " tahun " . $m . " bulan " . $d . " hari <br/>";
 
                    if ($gol=='Staff')
                    {
                        printf("Gaji yang diterima : %.2f",$gaji_staff);
                    }
                    else if($gol=='Leader')
                    {
                        printf("Gaji yang diterima : %.2f",$gaji_leader);
                    }
                    else if ($gol=='Manager')
                    {
                        printf("Gaji yang diterima : %.2f",$gaji_manager);
                    }
                    else if ($gol=='Direktur')
                    {
                        printf("Gaji yang diterima : %.2f",$gaji_direktur);
                    }
                }
            ?>
        </div>
</form>
</body>
</html>