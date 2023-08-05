<?php

require "Controller/function.php";

$data = query("SELECT * FROM peminjam");

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
          <a class="nav-link active navbar-text" aria-current="page" href="#">List Peminjam</a>
          <a class="nav-link navbar-text" href="page/pinjam.php">Pinjam Buku</a>
          <a class="nav-link navbar-text" href="#">Pinjaman Saya</a>
          <a class="nav-link disabled navbar-text" aria-disabled="true">Disabled</a>
        </div>
      </div>
    </div>
  </nav>



  <div class="container justify-content-center p-5">
    <div>
      <nav class="navbar bg-body-tertiary">
        <form class="container-fluid" action="" method="">
          <div class="input-group">

            <select class="form-select" aria-label="Disabled select example">
              <option selected disabled>Urutkan</option>
              <option value="1">Di Pinjam</option>
              <option value="1">Di Kembalikan</option>
              <option value="1">Lemari A1</option>
              <option value="2">Lemari A2</option>
              <option value="2">Sudah Di Kembalikan</option>
              <option value="2">Belum Di Kembalikan</option>
            </select>
            <span class="input-group-text" id="basic-addon1"><input type="button" value="Urutkan"></span>
          </div>
        </form>
      </nav>
    </div>
    <table class="table table-bordered border-primary">
      <thead>
        <tr class=" text-center">
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Buku</th>
          <th scope="col">Lemari</th>
          <th scope="col">Status</th>
          <th scope="col">Peminjaman</th>
          <th scope="col">Pengembalian</th>
          <th scope="col">Batas Pengembalian</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($data as $datas) { ?>
          <tr class="text-center">
            <th scope="row">
              <?php echo $no++; ?>
            </th>
            <td>
              <?php echo $datas["Nama"] ?>
            </td>
            <td>
              <?php echo $datas["Buku"] ?>
            </td>
            <td>
              <?php echo $datas["Lemari"] ?>
            </td>
            <td>
              <?php if ($datas["Status"] == "Dipinjam") { ?>
                <p class="text-danger">
                  <a href="details.php?id=<?php echo $datas["No"] ?>">
                  <?php echo $datas["Status"] ?>
                  </a>
                </p>
              <?php } else if ($datas["Status"] == "Dikembalikan") { ?>
                <p class="text-success">
                  <a href="details.php?id=<?php echo $datas["No"] ?>">
                  <?php echo $datas["Status"] ?>
                  </a>
              <?php } ?>
            </td>

            <td>
              <?php echo $datas["Peminjaman"] ?>
            </td>
            <td>
              <?php echo $datas["Pengembalian"] ?>
            </td>
            <td>
              <?php echo $datas["Batas_Pengembalian"] ?>
            </td>
          </tr>
        <?php } ?>

      </tbody>
    </table>
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