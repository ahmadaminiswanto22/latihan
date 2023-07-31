<?php
include 'koneksi.php';
function inisial($nama)
{
    $arr = explode(' ', $nama);
    $singkatan = '';
    foreach ($arr as $kata) {
        $singkatan .= substr($kata, 0, 1);
    }
    return $singkatan;
}

$sql = mysqli_query($conn, "SELECT * FROM test ORDER BY id_test DESC");
while ($data = mysqli_fetch_assoc($sql)) {
?>
<div class="card rounded bg-light mb-1">
    <div class="card-body mb-0">
        <div class="row">
            <div class="col-md-2 col-2 pb-0">
                <img class="rounded-circle"
                    src=https://na.ui-avatars.com/api/?name=<?= inisial($data['nama']); ?>&size=40&background=random&color=random alt="Nama Avatar">
            </div>
            <div class="col-md-6 col-6 mb-0">
                <h5 class="text-muted mb-0"><?= $data['nama']; ?></h5>
                <!--<ul class="text-muted mb-0 mb-0 pb-0">-->
                <!--    <li><span>Konfirmasi: <?= $data['kehadiran']; ?></span></li>-->
                <!--</ul>-->
            </div>
            <div class="col-md-4 col-4 mb-0">
                <small><i class="far fa-clock"></i>
                    <span><?= $data['tanggal']; ?></span></small>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-2"></div>
            <div class="col md-10 col-10">
                <h5 class="font-weight-normal mb-0"><?= $data['pesan']; ?>.</h5>
            </div>
        </div>
    </div>
</div>
<?php } ?>