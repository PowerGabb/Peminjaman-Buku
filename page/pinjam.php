<?php 
require "../Controller/function.php";

if (isset($_POST["kirim"])) {
    if (!tambah($_POST)) {
        echo "
            
        <script>
        alert('Gagal Mengambil Data');
        </script>
        
        ";
    }else {
        echo "
            
        <script>
        alert('Berhasil Meminjam');
        document.location.href = '../index.php';
        </script>
        
        ";
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peminjaman Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>


    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SMK FATAHILLAH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link navbar-text" aria-current="page" href="../index.php">List Peminjam</a>
                    <a class="nav-link navbar-text active" href="#">Pinjam Buku</a>
                    <a class="nav-link navbar-text" href="#">Pinjaman Saya</a>
                    <a class="nav-link disabled navbar-text" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav>


    <div class="container w-50 p-5">
        <form action="" method="post">
            <div class="row mb-3">
                <div class="col">
                    <label for="Nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="Nama" name="Nama" aria-describedby="emailHelp">
                </div>
                <div class="col">
                    <label for="Buku" class="form-label">Buku</label>
                    <input type="text" class="form-control" id="Buku" name="Buku" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="Gambar" class="form-label">Gambar</label>
                    <input type="text" class="form-control" id="Gambar" name="Gambar" aria-describedby="emailHelp">
                </div>
                <div class="col">
                    <label for="Lemari" class="form-label">Lemari</label>
                    <input type="text" class="form-control" id="Lemari" name="Lemari" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="Status" class="form-label">Status</label>
                    <select name="Status" id="Status">
                        <option value="Dipinjam">Meminjam</option>
                        <option value="Dikembalikan">Mengembalikan</option>
                    </select>
                </div>
                <div class="col">
                    <label for="Peminjaman" class="form-label">Peminjaman</label>
                    <input type="date" class="form-control" id="Peminjaman" name="Peminjaman"
                        aria-describedby="emailHelp">
                </div>
            </div>
            <div class="col">
                    <label for="Pengembalian" class="form-label">Pengembalian</label>
                    <input type="date" class="form-control" id="Pengembalian" name="Pengembalian"
                        aria-describedby="emailHelp">
                </div>
            <div class="mb-3">
                <label for="Batas_Pengembalian" class="form-label">Batas Pengembalian</label>
                <input type="date" class="form-control" id="Batas_Pengembalian" name="Batas_Pengembalian"
                    aria-describedby="emailHelp">
            </div>

            <button type="submit" class="btn btn-primary" name="kirim">Submit</button>
        </form>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>
</body>

</html>