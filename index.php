<?php 
  include("koneksi.php"); //memanggil kelas atau file koneksi
  include("template/header.php");
  include("template/navbar.php");
?>
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

    $sql = "SELECT * FROM siswa" ; //query untuk mengabil atau menampilkan data dari tabel siswa yang ada di database

    $query = mysqli_query($conn, $sql); //menggunkan fungsi mysqli_query untuk menampilkan data hasil query diatas, $conn ialah variabel yang menampung koneksi antara PHP dan MYSQL, sedangkan $sql ialah variabel yang menampung hasil dari query select yang diatas.
    
    foreach ($query as $siswa) { //unutk mengulangi query diatas.
       
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

<?php include("template/footer.php"); ?>