<?php
$nama = $_POST["Nama"];
$jenis_pegawai = $_POST["jp"];
$job = $_POST["Job"];
$jam_kerja = $_POST["jam_kerja"];
$jambonus = 100;
$pajak =  0.5 / 100;

if ($jam_kerja >= $jambonus) {
    if ($jenis_pegawai == "Karyawan Tetap") {
        if ($job == "Teller") {
            $gaji_perjam  = 40000;
        } elseif ($job == "Customer Service") {
            $gaji_perjam  = 60000;
        } elseif ($job == "Staff Back Office (BO)") {
            $gaji_perjam  = 50000;
        } elseif ($job == "Account Officer (AO)") {
            $gaji_perjam  = 80000;
        } elseif ($job == "Account Officer (AO)") {
            $gaji_perjam  = 85000;
        } elseif ($job == "Sales Officer") {
            $gaji_perjam  = 75000;
        } elseif ($job == "Funding Officer") {
            $gaji_perjam  = 55000;
        } elseif ($job == "Auditor") {
            $gaji_perjam  = 90000;
        }
    } elseif ($jenis_pegawai == "Karyawan Kontrak") {
        if ($job == "Teller") {
            $gaji_perjam  = 30000;
        } elseif ($job == "Customer Service") {
            $gaji_perjam  = 50000;
        } elseif ($job == "Staff Back Office (BO)") {
            $gaji_perjam  = 40000;
        } elseif ($job == "Account Officer (AO)") {
            $gaji_perjam  = 65000;
        } elseif ($job == "Sales Officer") {
            $gaji_perjam  = 75000;
        } elseif ($job == "Funding Officer") {
            $gaji_perjam  = 85000;
        } elseif ($job == "Auditor") {
            $gaji_perjam  = 70000;
        }
    }
}
echo "<h2>Rincian Gaji Karyawan</h2>";
$gaji_pokok = $gaji_perjam * $jam_kerja;
$bonus = $jambonus * 5000;
$potongan_gaji = $pajak * $gaji_pokok;
$gaji_total = $gaji_pokok + $bonus - $potongan_gaji;
?>
<table>
    <tr>
        <td>Nama Karyawan : <?php echo ucwords($nama); ?></td>
    </tr>
    <tr>
        <td>Jenis Karyawan : <?php echo ucwords($jenis_pegawai); ?></td>
    </tr>
    <tr>
        <td>Job : <?php echo ucwords($job); ?></td>
    </tr>
    <tr>
        <td>Tarif Jam Kerja : <?php echo $gaji_perjam; ?></td>
    </tr>
    <tr>
        <td>Total Jam Kerja : <?php echo $jam_kerja . " Jam"; ?></td>
    </tr>
    <tr>
        <td>Gaji Pokok : <?php echo $gaji_pokok; ?></td>
    </tr>
    <tr>
        <td>Bonus : <?php echo $bonus; ?></td>
    </tr>
    <tr>
        <td>Potongan : <?php echo $potongan_gaji; ?></td>
    </tr>
    <tr>
        <td>Gaji Total : <?php echo $gaji_total; ?></td>
    </tr>
</table>