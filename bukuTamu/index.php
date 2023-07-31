<?php
$judul= 'Halaman Utama';
include "header.php";
?>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        
                        <?php
                        include "../database/koneksi.php";
                        // menghitung data 
                        $nama = mysqli_num_rows(mysqli_query($conn,"SELECT nama FROM test"));
                        $ucapan = mysqli_num_rows(mysqli_query($conn,"SELECT pesan FROM test"));
                        $hadir = mysqli_num_rows(mysqli_query($conn,"SELECT kehadiran FROM test WHERE kehadiran ='Hadir'"));
                        $tdk_hadir = mysqli_num_rows(mysqli_query($conn,"SELECT kehadiran FROM test WHERE kehadiran ='Tidak Hadir'"));
                        ?>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><h4><?= $nama; ?> Orang</h4></div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                         <h6>Jumlah Konfirmasi</h6>   
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><h4><?= $ucapan; ?> Pesan</h4></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        <h6>Jumlah Pesan</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><h4><?= $hadir; ?> Orang</h4></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        <h6>Konfirmasi Hadir</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><h4><?= $tdk_hadir; ?> Orang</h4></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        <h6>Konfirmasi Tidak Hadir</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row justify-content-center mt-4 mb-4">
                            <div class="col-md-12 col-12">
                            <img src="assets/img/cover.JPG" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>
                        
                    </div>
                </main>
<?php
include "footer.php";
?>