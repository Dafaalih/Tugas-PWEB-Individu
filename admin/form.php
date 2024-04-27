<?php
require_once "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM db_costumer WHERE id_customer = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id_customer = $_POST['id'];
    $nama_customer = $_POST['nama_customer'];
    $alamat = $_POST['alamat'];
    $id_jenis = $_POST['jenis'];
    $id_harga = $_POST['harga'];

    $update_query = "UPDATE db_costumer SET nama_customer='$nama_customer', alamat='$alamat', id_jenis='$id_jenis', id_harga='$id_harga' WHERE id_customer='$id_customer'";
    
    $update_result = mysqli_query($koneksi, $update_query);

    if ($update_result) {
        header("Location: edit.php");
        exit();
    } else {
        echo "Error: " . $update_query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pelanggan</title>
    <link rel="stylesheet" href="../style/styleedit.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo"><img src="../asset/Nature Archive.png" alt=""></div>
        <ul class="menu">
            <li>
                <a href="./index.php">
                    <h4>Dashboard</h4>
                </a>
            </li>
            <li>
                <a href="./edit.php">
                    <h4>List Data</h4>
                </a>
            </li>
            <li class="active">
                <a href="./insert.php">
                    <h4>Insert Data</h4>
                </a>
            </li>
            <li class="logout">
                <a href="../login.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <h4>Logout</h4>
                </a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <?php if (isset($data)): ?>
            <input type="hidden" name="id" value="<?php echo $data['id_customer']; ?>">
            <label for="nama_customer">Nama:</label>
            <input type="text" id="nama_customer" name="nama_customer" value="<?php echo $data['nama_customer']; ?>"><br><br>
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" value="<?php echo $data['alamat']; ?>"><br><br>
            <label for="jenis">Jenis:</label>
            <input type="text" id="jenis" name="jenis" value="<?php echo $data['id_jenis']; ?>"><br><br>
            <label for="harga">Harga:</label>
            <input type="text" id="harga" name="harga" value="<?php echo $data['id_harga']; ?>"><br><br>
            <input type="submit" value="Simpan Perubahan">
            <?php else: ?>
            <p>Data tidak tersedia.</p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
