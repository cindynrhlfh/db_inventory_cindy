<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman tambah Data Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../barang/index.php">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis/index.php">Jenis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container">
    <h1>Halaman Tambah Data Barang</h1>
    <br>
    <form action="proses_tambah.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Barang</label>
    
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_barang">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
    
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_barang">
    
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Stok</label>
    
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stok">
    
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Harga</label>
    
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga">
    
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Jenis</label>
    
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_jenis">
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</body>
</html>
