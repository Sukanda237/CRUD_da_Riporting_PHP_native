  <?php 

    $server = "localhost"; //nama server, biasanya nama default server XAMPP ialah localhost atau 127.0.0.1

    $username = "root"; //nama username, biasanya nama default server XAMPP ialah root tidak menutup kemungkinan kita juga bisa merubah atau membuat username baru

    $password = ""; //password, biasanya password default server XAMPP ialah kosong bisa juga ditulis seperti ini(""),tidak menutup kemungkinan kita juga bisa merubah atau membuat password baru

    $database = "siswa"; //database, ialah nama database yang ingin kita gunakan

    // menggunakan fungsi mysqli_connect() untuk membuat koneksi kedatabse
    $conn = mysqli_connect($server,$username,$password,$database);

    // pengecekan koneksi kedatabse
    if(!$conn){
    	//jika koneksi gagal maka munculkan pesan seperti dibawah ini
        die (" gagal terhubung ke database ". mysqli_connect_error());
    }
    // else{
    // jika koneksi berhasil, maka munculkan pesan seperti dibawah ini
    // echo "Koneksi ke database berhasil";
    // }

?>
