<?php 
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die ("Connection failed: " . mysqli_connect_error());
}
// Query untuk memasukkan data
$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('Jer', 'Jerman', '4')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>