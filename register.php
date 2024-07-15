<?php 

include 'config.php'; 

if(isset($_POST['simpan'])){
    $nama       = $_POST['nama'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    // $password   = hash('sha256', $_POST['password']);

    $query      = "INSERT INTO user VALUES ('', '$nama', '$email', '$password')";

    if (mysqli_query($conn, $query)){
        echo "
        <script>
            alert('Berhasil registrasi');
            document.location.href = 'login.php';
        </script>";
    }else{
        echo "<script>alert('Gagal registrasi');</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/lores.css">    
    <title>Registrasi WebBlog</title>
</head>
<body>
    
    <div class="form-login">
        <form method="post">
            <h2>Form Regisrasi</h2>
            <hr>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Masukkan Email" >
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" placeholder="Masukkan Password" >
            </div>
            <div class="form-group">
                <p>Sudah punya akun? <a href="login.php">Login</a></p>
            </div>
            <div class="button">
                <input type="submit" class="btn btn-primary" name="simpan" value="Daftar">
            </div>
        </form>
    </div>

</body>
</html>