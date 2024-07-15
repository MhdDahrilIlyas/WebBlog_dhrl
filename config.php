<?php 

$server     = "localhost";
$username   = "root";
$password   = "";
$database   = "webblog_dhrl";

$conn       = mysqli_connect($server, $username, $password, $database);

if(!$conn){
    echo 
    "<script>
        alert('Koneksi Gagal');
    </script>";
}

include 'user/function.php';

?>