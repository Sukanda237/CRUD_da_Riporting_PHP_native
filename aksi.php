<?php 

include('koneksi.php');
  $no = $_POST['no_induk'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $sekolah = $_POST['sekolah'];
  
  mysqli_query($conn, "INSERT INTO siswa VALUE ('$no','$nama','$kelas','$sekolah')");

   header('Location:index.php');
  ?>