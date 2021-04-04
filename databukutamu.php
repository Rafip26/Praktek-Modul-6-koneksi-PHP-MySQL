<html>
<head><title>Buku Tamu</title></head>
<body>
    <center><h1>Buku Tamu</h1></center>
    <center><p>Silahkan isi</p></center>
    <!-- Form untuk menerima input -->
    <form method="POST" action="insertdatabukutamu.php">
        <table width="400" align="center" cellpadding="2" cellspacing="2">
            <tr>
                <td> Nama : </td>
                <td><input type="text" name="inputnama"></td>
            </tr>
            <tr>
                <td> Email : </td>
                <td><input type="text" name="inputemail"></td>
            </tr>
            <tr>
                <td> Isi : </td>
                <td><textarea name="inputisi"></textarea> 
            </tr>
        </table>
        <center>
        <!-- Button untuk mensubmit dan mereset input -->
            <input type="submit" name="submit" value="SUBMIT" style="background-color: blue;">
            <input type="reset" name="reset" value="RESET" style="background-color: RED;">
        </center> </form></body></html>