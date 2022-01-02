<?php 
    include "../dbconnect.php";    
    if($_GET['act'] == 'tambahpaket'){
        $id_paket = $_POST['id_paket'];
        $paket = $_POST['paket'];
        $tarif = $_POST['tarif'];
    
        //query
        $querytambah =  mysqli_query($conn, "INSERT INTO tb_paket VALUES('$id_paket','$paket','$tarif')");
    
        if ($querytambah) {
            # code redicet setelah insert ke index
            header("location:../data_paket.php");
        }
        else{
            echo "ERROR, tidak berhasil". mysqli_error($conn);
        }
    }
?>