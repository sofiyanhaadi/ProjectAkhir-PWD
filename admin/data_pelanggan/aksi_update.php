<?php 
    include "../../dbconnect.php";    
    if($_GET['act'] == 'updatepaket'){
        $id = $_POST['id_pelanggan'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $email = $_POST['email'];
        $paket = $_POST['paket'];
    
        //query
        $queryupdate =  mysqli_query($conn, "UPDATE tb_pelanggan SET nama='$nama', alamat='$alamat', no_hp='$no_hp', email='$email', id_paket='$paket' WHERE id_pelanggan='$id'");
    
        if ($queryupdate) {
            # code redicet setelah insert ke index
            header("location:data_pelanggan.php");
        }
        else{
            echo "ERROR, tidak berhasil". mysqli_error($conn);
        }
    }
?>