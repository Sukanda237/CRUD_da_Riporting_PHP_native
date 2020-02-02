<?php

include('koneksi.php');
  $no = $_POST['no_induk'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $sekolah = $_POST['sekolah'];
  
  mysqli_query($conn, "UPDATE siswa SET nama='$nama', kelas='$kelas', sekolah='$sekolah' WHERE no_induk='$no' ");

   header('Location:index.php');

?>