<?php 
    include "../../dbconnect.php";    
    if($_GET['act'] == 'tambahpelanggan'){
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $email = $_POST['email'];
        $paket = $_POST['paket'];
    
        //query
        $querytambah =  mysqli_query($conn, "INSERT INTO tb_pelanggan (id_pelanggan, nama, alamat, no_hp, email, id_paket) VALUES(NULL,'$nama','$alamat','$no_hp','$email','$paket')");
    
        if ($querytambah) {
            # code redicet setelah insert ke index
            header("location:data_pelanggan.php");
        }
        else{
            echo "ERROR, tidak berhasil". mysqli_error($conn);
        }
    }
?>