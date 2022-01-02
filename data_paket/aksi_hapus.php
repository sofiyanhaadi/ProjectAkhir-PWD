//aksi_hapus.php
<?php 
    include "../dbconnect.php";
    $id = $_GET['id'];
    $sql = "DELETE from tb_paket WHERE id_paket='$id'";    
    $query = mysqli_query($conn, $sql);
    header("location:../data_paket.php");
?>