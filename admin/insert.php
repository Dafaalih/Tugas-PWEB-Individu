
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <li >
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
            
            <form class="" action="">
                
                <div class="mb-3">
                    <label for="nama_customer" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama_Apoteker" name="nama_Apoteker" required>
                </div>
    
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>

                <div class="mb-3">
                    <label for="jenis" class="form-label">Jenis</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" required>
                </div>
                
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" required>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-secondary" type="submit" name="submit">Tambah Data</button>
                </div>
            </form>
        </div>
    
</body>
</html>
