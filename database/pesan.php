<?php
include 'koneksi.php';

// if(isset($_POST['submit'])){
//     $nama = htmlspecialchars($_POST["nama"]);
//     $konfirmasi = htmlspecialchars($_POST["konfirmasi"]);
//     $pesan = htmlspecialchars($_POST["pesan"]);
//     $tanggal = date('l, d M Y H:i');

//     $sql = "INSERT INTO test VALUES ('','$nama','$konfirmasi','$pesan','$tanggal')";

//     mysqli_query($conn, $sql);

//     if(mysqli_affected_rows($conn) > 0){
//         echo "
//         <script>
//           alert('Pesan Terkirim');
//           document.location.href = '../index.php';
//         </script>
//         ";
//     }
// }
$nama = htmlspecialchars($_POST["nama"]);
$konfirmasi = htmlspecialchars($_POST["konfirmasi"]);
$pesan = htmlspecialchars($_POST["pesan"]);
$tanggal = date('l, d M Y H:i');

$sql = "INSERT INTO test VALUES ('','$nama','$konfirmasi','$pesan','$tanggal')";

$hasil = mysqli_query($conn, $sql);
