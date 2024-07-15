<?php 

include '../config.php'; 

//mengambil id_user dari url
$id_user = $_GET['id_user'];

//query menghapus data
mysqli_query($conn, "DELETE FROM user WHERE id_user='$id_user'");

//alihkan halaman user.php
echo "
    <script>
        alert('User telah dihapus');
        document.location.href = 'user.php';
    </script>";
?>