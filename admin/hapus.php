<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "db_nature_archive";


$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $query = "DELETE FROM db_costumer WHERE id_customer = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: edit.php");
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
