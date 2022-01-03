//aksi_hapus.php
<?php 
    include "../../dbconnect.php";
    $id = $_GET['id'];
    $sql = "DELETE from tb_pelanggan WHERE id_pelanggan='$id'";    
    $query = mysqli_query($conn, $sql);
    header("location:data_pelanggan.php");
?>