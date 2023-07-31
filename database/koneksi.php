<?php
$conn = mysqli_connect("localhost", "rume5416_undangan", "undanganwebook", "rume5416_undangan");

if (mysqli_connect_errno()) {
    echo "koneksi database gagal:" . mysqli_connect_errno();
}