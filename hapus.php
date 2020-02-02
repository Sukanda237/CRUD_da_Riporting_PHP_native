<?php

include('koneksi.php');

$no = $_GET['no_induk'];

mysqli_query($conn, "DELETE FROM siswa WHERE no_induk=$no");

header("Location:index.php");

?>
