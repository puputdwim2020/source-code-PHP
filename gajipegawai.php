<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>

<body>
    <form action="proses.php" method="POST">

        <body bgcolor="skyblue">
            <fieldset>
                <h1>
                    <center>Masukkan Data Karyawan</center>
                </h1>

                <p>
                    <center>
                        <h4>
                            <table>
                                <tr>
                                    <td>Nama Karyawan</td>
                                    <td> </td>
                                    <td><input type="text" style="width: 300px; height: 25px;" name="Nama" placeholder="Masukan Nama"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Jenis Karyawan</td>
                                    <td> </td>
                                    <td>
                                        <input type="radio" name="jp" value="Karyawan Tetap" />Karyawan Tetap
                                        <input type="radio" name="jp" value="Karyawan Kontrak" /> Karyawan Kontrak
                                    </td>
                                </tr>
                                <tr>
                                    <td>Job</td>
                                    <td> </td>
                                    <td><select name="Job">
                                            <option value="Teller">Teller
                                            <option value="Customer Service">Customer Service
                                            <option value="Staff Back Office (BO)">Staff Back Office (BO)
                                            <option value="Account Officer (AO)">Account Officer (AO)
                                            <option value="Sales Officer">Sales Officer
                                            <option value="Funding Officer">Funding Officer
                                            <option value="Auditor">Auditor
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Total Jam Kerja</td>
                                    <td></td>
                                    <td><input type="number" name="jam_kerja" /></td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td> </td>
                                    <td><input type="submit" style="width: 100px; height: 30px;" name="submit" value="Hitung" /></td>
                                </tr>
                            </table>
            </fieldset>
    </form>
</body>

</html>