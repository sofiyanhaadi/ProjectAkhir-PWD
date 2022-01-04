<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
    include "../../dbconnect.php";    
    if($_GET['act'] == 'tambahtagihan'){
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];


        $sqlread = mysqli_query($conn, "SELECT * FROM tb_pelanggan INNER JOIN tb_paket ON tb_pelanggan.id_paket = tb_paket.id_paket");

        foreach ($sqlread as $row):
            $id = $row['id_pelanggan'];
            $tagihan = $row['tarif'];
            $querytambah = mysqli_query($conn, "INSERT INTO tb_tagihan(id_tagihan, bulan, tahun, id_pelanggan, tagihan, status) 
            VALUES(NULL,'$bulan','$tahun','$id','$tagihan', 'BL')");
        endforeach;

        if (mysqli_affected_rows($conn)) {
            echo "
            <script>
                alert('Berhasi menambahkan tagihan');
                document.location.href = 'buat_tagihan.php';
            </script>
        ";
        }
        else{
            echo "ERROR, tidak berhasil | ". mysqli_error($conn);
        };
    }
?>