<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "perpustakaan";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    echo 
        "
        
        <script>
        alert('Gagal Terhubung Ke Database');
        </script>
        
        ";
}

function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "
        
        <script>
        alert('Gagal Mengambil Data');
        </script>
        
        ";
    } else {
        while ($looping = mysqli_fetch_assoc($result)) {
            $data[] = $looping;
        }
        return $data;
    }
}

function tambah($post) {
    global $conn;
    $Nama = $post["Nama"];
    $Buku = $post["Buku"];
    $Gambar = $post["Gambar"];
    $Lemari = $post["Lemari"];
    $Status = $post["Status"];
    $Peminjaman = $post["Peminjaman"];
    $Pengembalian = $post["Pengembalian"];
    $Batas_Pengembalian = $post["Batas_Pengembalian"];

    $query = "INSERT INTO `peminjam` (`No`, `Nama`, `Buku`, `Gambar`, `Lemari`, `Status`, `Peminjaman`, `Pengembalian`, `Batas_Pengembalian`) 
              VALUES ('', '$Nama', '$Buku', '$Gambar', '$Lemari', '$Status', '$Peminjaman', '$Pengembalian', '$Batas_Pengembalian');";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error: " . mysqli_error($conn)); // Menggunakan mysqli_error untuk menampilkan pesan error
    } else {
        return mysqli_affected_rows($conn);
    }
}


?>