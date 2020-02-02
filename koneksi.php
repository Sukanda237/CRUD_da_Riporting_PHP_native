  <?php 

    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "siswa";

    $conn = mysqli_connect($server,$user,$pass,$database);

    if(!$conn){
        die (" gagal terhubung ke database ". mysqli_connect_error());
    }

?>