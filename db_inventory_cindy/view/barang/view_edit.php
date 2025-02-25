
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
<div class="container">

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
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <h1>Data Barang</h1> <br>
    <?php
         include '../../config/koneksi.php';
         $id_barang=$_GET['id_barang'];
         $query = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id_barang'");
         $result=mysqli_fetch_assoc($query);
    ?>
    <form action="proses_edit.php?id_barang=<?php echo $result['id_barang']?>"method="POST">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID barang</label>
    <input type="number" class="form-control"name="id_barang"
    value="<?php echo $result['id_barang']?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Nama barang</label>
    <input type="text" class="form-control"name="nama_barang"
    value="<?php echo $result['nama_barang']?>" id="exampleInputEmail1">
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Stok</label>
    <input type="text" class="form-control"name="stok"
    value="<?php echo $result['stok']?>" id="exampleInputEmail1">
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Harga</label>
    <input type="text" class="form-control"name="harga"
    value="<?php echo $result['harga']?>" id="exampleInputEmail1">
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">ID Jenis</label>
    <input type="text" class="form-control"name="id_jenis"
    value="<?php echo $result['id_jenis']?>" id="exampleInputEmail1">
</div>
<button type="submit" class="btn btn-primary">submit</button>
</form>
</div>
</body>
</html>
