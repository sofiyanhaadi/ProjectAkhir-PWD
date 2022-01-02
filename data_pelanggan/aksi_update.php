<?php 
    include "../dbconnect.php";    
    if($_GET['act'] == 'updatepaket'){
        $id = $_POST['idpaket'];
        $paket = $_POST['paket'];
        $tarif = $_POST['tarif'];
    
        //query
        $queryupdate =  mysqli_query($conn, "UPDATE tb_paket SET paket='$paket', tarif='$tarif' WHERE id_paket='$id'");
    
        if ($queryupdate) {
            # code redicet setelah insert ke index
            header("location:../data_paket.php");
        }
        else{
            echo "ERROR, tidak berhasil". mysqli_error($conn);
        }
    }
?>