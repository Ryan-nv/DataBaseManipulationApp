<?php
    $judul = "Hapus data";

    include 'head.php';
    include 'koneksi.php';

    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM tb_pengguna WHERE `id_pengguna`='$id'");
?>
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <div class="card bg-warning">
                <div class="card-body">
                    <p><b>Data telah dihapus</b></p>
                    <a href="show.php" class="btn btn-primary float-end">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'foot.php'; ?>