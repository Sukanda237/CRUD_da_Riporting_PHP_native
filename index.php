<?php 
  include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
   
<!-- awal navbar  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">    
<a class="navbar-brand" href="#">PKL</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav">
<a class="nav-item nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
<a class="nav-item nav-link " href="input_data.php">INPUT <span class="sr-only">(current)</span></a>


</div>
</li>
</div>
</div>
</div>  
</nav>
<!-- akhir navbar -->



    <!-- awal konten -->
    <div class="container">

    <div class="row mt-5"></div>
    <h2>Daftar Siswa</h2>
    <br>
    <div class="row">
    <!-- <div class="col-md-4"></div>
    <div class="col-md-4"> -->
    
    
    <a href="cetak.php" target="_blank"><button type="button" class="btn btn-primary">Cetak</button></a>
    <br><br><br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Sekolah</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>

  <?php 

    $sql = "SELECT * FROM siswa" ;
    $query = mysqli_query($conn, $sql);
      
    // while($siswa = mysqli_fetch_assoc($query)){ 

      foreach ($query as $siswa) {
      
  ?>
  <tbody>
    <tr>
      <th scope="row"> <?= $siswa['no_induk']; ?> </th>
      <td><?= $siswa['nama']; ?></td>
      <td><?= $siswa['kelas']; ?></td>
      <td><?= $siswa['sekolah']; ?></td>
      <td>
      <a href="edit.php?no_induk=<?= $siswa['no_induk']; ?>">Edit</a> |
      <a href="hapus.php?no_induk=<?= $siswa['no_induk']; ?>">Hapus</a> |
      <a href="detail.php?no_induk=<?= $siswa['no_induk']; ?>">Detail</a>
      </td>
    </tr>
  </tbody>

  <?php } ?>
</table>


    <!-- </div>
    <div class="col-md-4"></div> -->
    </div>
    </div>
    <!-- akhir konten -->
    








  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>