<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//function user
    //tampil user
    function tampilUser()
    {
        global $conn;
    
        $query  = "SELECT * FROM user";
        $res    = mysqli_query($conn, $query);
    
        $row    = [];
    
        while ($rows = mysqli_fetch_assoc($res)){
            $row[] = $rows;
        }
        return $row;
    }
    //tambah user
    function addUser($data)
    {
        global $conn;

        $nama       = $data['nama'];
        $email      = $data['email'];
        $password   = $data['password'];

        $query      = "INSERT INTO user VALUES ('', '$nama', '$email', '$password')";

        if (mysqli_query($conn, $query)){
            echo "
            <script>
                alert('User ditambahkan');
            </script>";
        }else{
            echo "
            <script>
                alert('Gagal menambah user');
            </script>";
        }
    }
    //update user
    function updateUser($data){
        global $conn;
    
        $id_user    = $data['id_user'];
        $nama       = $data['nama'];
        $email      = $data['email'];
        $password   = $data['password'];
    
        $query      = "UPDATE `user` SET nama='$nama', email='$email', password='$password' WHERE id_user='$id_user'";
    
        if (mysqli_query($conn, $query)){
            echo "
            <script>
                alert('User telah di update');
            </script>";
        }else{
            echo "
            <script>
                alert('Gagal mengupdate user');
            </script>";
        }
    }

//function blog
    //tampil blog
    function tampilBlog()
    {
        global $conn;

        $query  = "SELECT * FROM blog";
        $res    = mysqli_query($conn, $query);

        $row    = [];

        while ($rows = mysqli_fetch_assoc($res)){
            $row[] = $rows;
        }
        return $row;
    }
    //detail blog
    function detailBlog($idBlog)
    {
        global $conn;

        $query  = "SELECT * FROM blog WHERE id_blog='$idBlog'";
        $res    = mysqli_query($conn, $query);

        $row    = mysqli_fetch_assoc($res);

        return $row;
    }
    //hapus blog
    function hapusBlogKomentar($idBlog)
    {
        global $conn;

        $query  = "DELETE blog.*, comment.* FROM blog, comment WHERE blog.id_blog = '$idBlog' AND comment.id_blog='$idBlog'";
        // $query  = "DELETE comment.*, blog.* FROM c, komen WHERE blog.id_blog = '$idBlog' AND comment.id_blog='$idBlog'";

        // $query  = "DELETE FROM blog WHERE id_blog = '$idBlog'";
        

        if (mysqli_query($conn, $query)){
            echo "
            <script>
                alert('Blog telah dihapus');
            </script>";
        }
    }
    function cekPunyaKomentar($idBlog)
    {
        global $conn;

        $query  = "SELECT * FROM comment WHERE id_blog='$idBlog'";
        $res    = mysqli_query($conn, $query);

        $cek    = mysqli_fetch_array($res);

        if($cek > 0){
            hapusBlogKomentar($idBlog);
        }else{
            hapusBlog($idBlog);
            
        }
    }
    function hapusBlog($idBlog)
    {
        global $conn;

        $query  = "DELETE FROM blog WHERE id_blog = '$idBlog'";

        if (mysqli_query($conn, $query)){
            echo "
            <script>
                alert('Blog telah dihapus');
            </script>";
        }
    }


//function komen
    //tampil komen
    function tampilKomentar($idBlog)
    {
        global $conn;

        $query  = "SELECT user.nama, comment.text FROM user INNER JOIN comment ON comment.id_user=user.id_user WHERE comment.id_blog='$idBlog' ";
        $res    = mysqli_query($conn, $query);

        $row    = [];

        while ($rows = mysqli_fetch_assoc($res)){
            $row[] = $rows;
        }
        return $row;
    }
    //post/send komen
    function postKomentar($data, $idBlog)
    {
        global $conn;
    
        // User exists, login successful
        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);
    
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id_user'] = $row['id_user'];
    
        // Store user ID in session
        $userId = $_SESSION['id_user'];
    
        $text   = $data['text'];
    
        $query  = "INSERT INTO comment VALUES ('', '$text', '$idBlog', '$userId')";
    
        if (mysqli_query($conn, $query)){
            echo "
            <script>
                alert('Komentar di post');
            </script>";
        }else{
            echo "
            <script>
                alert('Komentar gagal');
            </script>";
        }
    }