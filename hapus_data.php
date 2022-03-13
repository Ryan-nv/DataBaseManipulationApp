<?php
    $judul = "konfirmasi hapus data";

    include "head.php";
    include "koneksi.php";

    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM `tb_pengguna` WHERE `id_pengguna`='$id' ORDER BY nm_pengguna ASC") or die(mysqli_error($koneksi));
    while($result = mysqli_fetch_array($query)) {
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header bg-warning text-light">
                    <h3><b>Konfismasi Hapus data</b></h3>
                </div>
                <div class="card-body">
                    <h5 class="card-tittle">Yakin mau menghapus data?</h5>
                    <p class="card-text">Data atas nama <?php echo $result['nm_pengguna'];?> akan dihapus</p>
                    <a href="hapus.php?id=<?php echo $result['id_pengguna'] ?>" class="btn btn-danger float-sm-start">Hapus</a>
                    <a href="show.php" class="btn btn-success float-sm-end">Batal</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
}
include "foot.php";

?>