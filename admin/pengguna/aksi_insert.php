<?php 
    include "../../dbconnect.php";    
    if($_GET['act'] == 'tambahuser'){
        $nama= $_POST['nama'];
        $user = $_POST['username'];
        $pass = md5($_POST['password']);
        $level = $$_POST['Level'];
        //query
        $querytambah =  mysqli_query($conn, "INSERT INTO tb_pengguna VALUES(NULL,'$nama','$user','$pass','$level')");
    
        if ($querytambah) {
            # code redicet setelah insert ke index
            echo "
            <script>
                alert('Berhasi menambahkan pengguna');
                document.location.href = 'pengguna.php';
            </script>
        ";
        }
        else{
            echo "ERROR, tidak berhasil". mysqli_error($conn);
        }
    }
?>