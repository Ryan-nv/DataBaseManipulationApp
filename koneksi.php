<?php
    $server = "localhost";
    $user = "root";
    $pass = getenv('');
    $dbname = "latihan_php";
    $koneksi = mysqli_connect($server, $user, $pass, $dbname);
    
    if(mysqli_connect_errno())
    {
        echo "Database Connection failed".mysqli_connect_error();
    }
?>