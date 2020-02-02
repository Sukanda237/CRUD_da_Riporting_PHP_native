<?php
include("koneksi.php");

// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();


// tag  pembuka html
$no = $_GET['no_induk'];
$sql = "SELECT * FROM siswa WHERE no_induk=$no" ;

$query = mysqli_query($conn, $sql);


$html = '<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<h1>Detail Siswa</h1>
<table border="1" cellpadding="10" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Sekolah</th>
    </tr>
  </thead>';
  
  foreach ($query as $siswa) {
      $html .= '<tbody>
      <tr>
      <td>'. $siswa["no_induk"].'</td>
      <td>'. $siswa["nama"].'</td>
      <td>'. $siswa["kelas"].'</td>
      <td>'. $siswa["sekolah"].'</td>
    </tbody>';
  }
  
  
  $html .= '</table> 
  </body>
</html>';
// tag  penutup html


// Write some HTML code:
$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output();

?>