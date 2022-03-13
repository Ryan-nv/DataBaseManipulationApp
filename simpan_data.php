<?php
    #connection master
    include 'koneksi.php';
    if(isset($_POST['login']))
    {
        if(isset($_POST['nama']) && !empty($_POST['nama']))
        {
            $nama = $_POST['nama'];
        }
        else
        {
            echo "Mohon isi kolom nama<br>";
        }

        if(isset($_POST['password']) && !empty($_POST['password']))
        {
            $password = $_POST['password'];
        }
        else
        {
            echo "Password belum diisi mohon isi terlebih dahulu<br>";
        }

        $level = $_POST['level'];
        
        if(!empty($nama) && !empty($level) && !empty($password))
        {
            $result = mysqli_query($koneksi, "INSERT INTO tb_pengguna (nm_pengguna, password, level) VALUES ('$nama',MD5('$password'),'$level')");
            if($result === false){
                echo 'query execution failed'; 
                printf("error: %s\n", mysqli_error($koneksi));
            }
            else {
                header("location:show.php");
            }
        }
    }
    else {
        echo 'failed to receive form data'; 
    }
?>