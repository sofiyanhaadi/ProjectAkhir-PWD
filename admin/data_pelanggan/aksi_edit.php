<?php 
    include "../../dbconnect.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_pelanggan WHERE id_pelanggan=".$id."";
    $query = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($query);
    echo json_encode($data);
?>