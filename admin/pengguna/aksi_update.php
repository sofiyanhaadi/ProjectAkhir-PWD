<?php 
    include "../../dbconnect.php";    
    if($_GET['act'] == 'updatedata'){
        $id = $_POST['id_pengguna'];
        $nama= $_POST['nama'];
        $user = $_POST['username'];
    
        //query
        $queryupdate =  mysqli_query($conn, "UPDATE tb_pengguna SET nama_pengguna='$nama', username='$user' WHERE id_pengguna='$id'");
    
        if ($queryupdate) {
            # code redicet setelah insert ke index
            echo "
            <script>
                alert('Berhasi mengubah data');
                document.location.href = 'pengguna.php';
            </script>
        ";
        }
        else{
            echo "ERROR, tidak berhasil". mysqli_error($conn);
        }
    }
?>