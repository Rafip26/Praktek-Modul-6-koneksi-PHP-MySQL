<?php 
// deklarasi variabel
$nama = $_POST['inputnama'];
$email = $_POST['inputemail'];
$isi = $_POST['inputisi'];
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "myDB";
//membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
//cek koneksi
if (!$conn) {
    die ("Connection failed: " . mysqli_connect_error());
}
// query untuk menambahkan data
$sql = "INSERT INTO buku_tamu (NAMA, EMAIL, ISI)
VALUES ('$nama', '$email', '$isi')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>