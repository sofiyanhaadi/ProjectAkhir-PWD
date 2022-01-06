<?php
    include("../../dbconnect");
    $id = $_GET['kode'];
    
    $tgl = date('Y-m-d');

    $sql = "UPDATE tb_tagihan SET status='LS', tgl_bayar='$tgl' WHERE id_tagihan='$id'";
    $queryupdate = mysqli_query($conn, $sql);

    if ($queryupdate) {
        echo "
        <script>
            alert('Berhasil bayar tagihan !');
            document.location.href = '../lunas/lunas.php';
        </script>
    ";
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($conn);
    }
?>