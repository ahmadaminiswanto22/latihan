<?php
$judul = 'Buku Tamu Digital';
include "header.php";
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Buku Tamu Digital</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Buku Tamu Digital</li>
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
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Buku Tamu Digital
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 1%;">No</th>
                                            <th class="text-center" style="width: 22%;">Nama</th>
                                            <th class="text-center" style="width: 13%;">Ditambahkan</th>
                                            <th class="text-center" style="width: 50%;">Pesan</th>
                                            <th class="text-center" style="width: 14%;">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        include "../database/koneksi.php";
                                        $no = 1;
                                        $sql = mysqli_query($conn, "SELECT * FROM test ORDER BY id_test ASC");
                                        while($data = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?=$no++;?></td>
                                            <td><?=$data['nama'];?></td>
                                            <td><?=$data['tanggal'];?></td>
                                            <td><?=$data['pesan'];?></td>
                                            <td>
                                                <?php
                                                $konfirm = $data['kehadiran'];
                                                if($konfirm == 'Hadir'){
                                                ?>
                                                   <b class="text-warning"><?=$konfirm;?></b>
                                                <?php
                                                }else{
                                                ?>
                                                    <b class="text-danger"><?=$konfirm;?></b>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php
include "footer.php";
?>