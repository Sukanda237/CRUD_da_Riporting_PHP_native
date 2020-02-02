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

<?php 

$no = $_GET['no_induk'];
$sql = "SELECT * FROM siswa WHERE no_induk=$no" ;
$query = mysqli_query($conn, $sql);
  
// while($siswa = mysqli_fetch_assoc($query)){ 

  foreach ($query as $siswa) {
  
?>

    <!-- awal konten -->
    <div class="container">

    <div class="row mt-5"></div>

<div class="row">

<div class="col-md-4">
</div>

<div class="col-md-4">
    <h2 align="Center">Detail Siswa</h2><br><br>
  <table class="table">
    
    <tr>
        <td>No Induk</td>
        <td> : </td>
        <td> <?= $siswa['no_induk']; ?> </td>
    </tr>
  
    <tr>
        <td>Nama</td>
        <td> : </td>
        <td> <?= $siswa['nama']; ?> </td>
    </tr>

    <tr>
        <td>Kelas</td>
        <td> : </td>
        <td> <?= $siswa['kelas']; ?> </td>
    </tr>

    <tr>
        <td>Sekolah</td>
        <td> : </td>
        <td> <?= $siswa['sekolah']; ?> </td>
    </tr>
  </table>
  <a href="cetak2.php?no_induk=<?= $siswa['no_induk']; ?>" target="_blank"><button type="button" class="btn btn-primary">Cetak</button></a>

</div>

<div class="col-md-4">
</div>

  <?php } ?>
</div>
    </div>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>