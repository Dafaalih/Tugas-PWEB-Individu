<?php
// Mengambil data koneksi ke database
$host = "localhost"; // Nama host
$username = "root"; // Nama pengguna
$password = ""; // Kata sandi
$database = "db_nature_archive"; // Nama database

// Membuat koneksi
$koneksi = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Memeriksa apakah formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir pendaftaran
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Mengenkripsi password sebelum menyimpannya di database (opsional, tapi disarankan)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk menyimpan data pengguna baru ke dalam tabel database
    $query = "INSERT INTO db_akun (username, password) VALUES ('$username', '$hashed_password')";

    // Memeriksa apakah query berhasil dieksekusi
    if (mysqli_query($koneksi, $query)) {
        echo "Pendaftaran berhasil! Silakan login dengan akun Anda.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    if ($update_result) {
        // Redirect kembali ke halaman list
        header("Location: login.php");
        exit(); // Pastikan untuk keluar dari skrip setelah header diatur
    } else {
        echo "Error: " . $update_query . "<br>" . mysqli_error($koneksi);
    }
}

// Menutup koneksi
mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nature Archive</title>
    <link rel="stylesheet" href="style/stylelogin.css" />
</head>
<body>
    <div class="box">
        <div class="container">
            <div class="header">
                <img src="asset/Nature Archive.png" alt="Nature Archive" />
            </div>
            <h1>Nature Archive</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="input-field">
                    <input type="text" class="input" name="username" placeholder="Username" required />
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="input" name="password" placeholder="Password" required />
                </div>
                <div class="input-field">
                    <input type="password" class="input" name="confirm_password" placeholder="Confirm Password" required />
                </div>
                <div class="input-field">
                    <input type="submit" class="submit" value="Register" />
                </div>
            </form>
            <div class="bottom">
                <div class="left">
                    <input type="checkbox" id="check" />
                    <label for="check"> Save login info?</label>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
