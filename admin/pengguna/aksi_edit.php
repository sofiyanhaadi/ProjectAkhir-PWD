<?php 
    include "../../dbconnect.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_pengguna WHERE id_pengguna=".$id."";
    $query = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($query);

    echo json_encode($data);

?>