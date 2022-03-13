<?php include('head.php');?>
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <a class="btn btn-primary float-end" href="input_data.php">Tambah Data</a>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-sm-10">
            <table border="1" class="table table-striped table-hover">
                <thead class="text-center">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include("koneksi.php");
                        $no=1;
                        $query=mysqli_query($koneksi, "SELECT * FROM `tb_pengguna`") or die(mysqli_error($koneksi));
                        while($result = mysqli_fetch_array($query)){
                            if($result['level'] == 1)
                            {
                                $level = "Administrator";
                            }
                            else if($result['level'] == 2)
                            {
                                $level = "Operator";
                            }
                            else if($result['level'] == 3)
                            {
                                $level = "User";
                            }
                            else {
                                $level = "Unprivileged";
                            }
                    ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $result['nm_pengguna'];?></td>
                        <td><?php echo $level;?></td>
                        <td class="text-center">
                            <a href="edit_data.php?id=<?=$result['id_pengguna'];?>" class="btn btn-warning">Edit</a>
                            <a href="hapus_data.php?id=<?=$result['id_pengguna'];?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    </body>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('foot.php');?>