<?php
include 'koneksi.php';
    
    if(isset($_POST['edit-save']))
    {
        $name = $_POST['nama'];
        $pass = $_POST['password'];
        $level = $_POST['level'];
        $id = $_POST['id'];

        if(!empty($name) && !empty($pass) && !empty($level))
        {
            $sql = "UPDATE `tb_pengguna` SET `nm_pengguna` = '$name', `password` = MD5('$pass'), `level` = $level WHERE `id_pengguna` = 3;";
            $result = mysqli_query($koneksi, $sql);
            if($result === false)
            {
                printf("error: %s\n", mysqli_error($koneksi));
            }
            else {
                header("location:show.php");
            }
        }
        else {
            echo "data transfer failed";
        }
    }
?>