<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nature Archive - Data Customers</title>
    <link rel="stylesheet" href="../style/styleedit.css">
</head>
<body>
    <div class="sidebar">
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

    </div>
    <div class="main--content">
        <div class="tabular--wrapper">
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';

                        $query = "SELECT * FROM db_costumer";
                        $result = mysqli_query($koneksi, $query);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row["id_customer"] . "</td>";
                                echo "<td>" . $row["nama_customer"] . "</td>";
                                echo "<td>" . $row["alamat"] . "</td>";
                                echo "<td>" . $row["id_jenis"] . "</td>";
                                echo "<td>" . $row["id_harga"] . "</td>";
                                echo "<td><a href='form.php?id=" . $row["id_customer"] . "'>Edit</a> | <a href='hapus.php?id=" . $row["id_customer"] . "'>Hapus</a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
                        }

                        mysqli_close($koneksi);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
