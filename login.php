<?php 

include 'config.php'; 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_POST['login'])){

    $nama       = $_POST['nama'];
    $password   = $_POST['password'];
    // $password   = hash('sha256', $_POST['password']);

    $query      = "SELECT * FROM user WHERE nama='$nama' AND password='$password'";
    $res        = mysqli_query($conn, $query);

    if($res->num_rows > 0){
        $row                  = mysqli_fetch_assoc($res);
        $_SESSION['login']    = true;
        $_SESSION['id_user']  = $row['id_user'];
        $_SESSION['username'] = $row['nama'];
        $_SESSION['email']    = $row['email'];

        echo "
        <script>
            alert('Berhasil login');
            document.location.href = 'user/index.php';
        </script>";
    }else{
        echo "
        <script>
            alert('Gagal login');
        </script>";
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
    <title>Login WebBlog</title>
</head>
<body>
    
    <div class="form-login">
        <form method="post">
            <h2>Form Login</h2>
            <hr>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" >
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" placeholder="Masukkan Password" >
            </div>
            <div class="form-group">
                <p>Belum punya akun? <a href="register.php">Daftar</a></p>
            </div>
            <div class="button">
            <button type="submit" class="btn btn-primary" name="login">Login</button>
            </div>
        </form>
    </div>

</body>
</html>