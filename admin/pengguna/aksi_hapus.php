//aksi_hapus.php
<?php 
    include "../../dbconnect.php";
    $id = $_GET['id'];
    $sql = "DELETE from tb_pengguna WHERE id_pengguna='$id'";    
    $query = mysqli_query($conn, $sql);
    // header("location:pengguna.php");
?>