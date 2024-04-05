<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nature Archive</title>
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
                <li class="active">
                    <a href="./edit/php">
                        <h4>List Data</h4>
                    </a>
                </li>
                <li>
                    <a href="./insert.php">
                        <h4>Insert Data</h4>
                    </a>
                </li>
                <li class="logout">
                    <a href="../login.php">
                        <span>Logout</span>
                    </a>
            </li>
            </ul>
    </div>


<div class="main--content">
    <div class="row">
        <div class="col-lg-6">
        </div>
    </div>
        <div class="header--wrapper">
            <div class ="header--title">
                <h2>Nature Archive</h2>
            </div>
            <div class="user--info">
                <img src="../assets/background.jpg" alt=""/>
            </div>            
        </div>
        <div class="tabular--wrapper">
            <h3 class="main--title">Data Customers</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                        <form action="">
                            <th>ID</th>
                            <th>Nama<button type="submit" name="sort" value="nama_customer"><i class="bi bi-sort-alpha-up"></i> </th>
                            <th>Alamat<button type="submit" name="sort" value="alamat"><i class="bi bi-sort-alpha-up"></i></button></th>
                            <th>Jenis<button type="submit" name="sort" value="jenis"><i class="bi bi-sort-alpha-up"></i></button></th>
                            <th>Harga<button type="submit" name="sort" value="harga"><i class="bi bi-sort-alpha-up"></i></button></th>
                            <th>Aksi</th>
                            <input type="hidden" name="order">
                        </form>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <td>Audra</td>
                                <td>Jl. Sriwijaya </td>
                                <td>Anggrek</td>
                                <td>223,800</td>
                                <td><a href="">Edit</a> | <a href="">Hapus</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Delvin</td>
                                <td>Jl. Soekarno</td>
                                <td>Mawar</td>
                                <td>140,884</td>
                                <td><a href="">Edit</a> | <a href="">Hapus</a></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    </body>
</html>