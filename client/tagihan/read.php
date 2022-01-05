<?php 
    //panggil file koneksi ke database
    include "../../dbconnect.php";
    //sql query tabel data
    $pass = $_SESSION['password'];
    $caridata = mysqli_query($conn, "SELECT * FROM tb_pelanggan WHERE password='$pass'");
    $data = mysqli_fetch_assoc($caridata);
    $id_pelanggan = $data['id_pelanggan'];

    //sql query tabel data
    $sql = "SELECT * from tb_tagihan WHERE id_pelanggan=$id_pelanggan";
    $query = mysqli_query($conn, $sql);
?>      
    <?php foreach ($query as $row):
        if($row["tgl_bayar"] == "0000-00-00"){
            $tanggal = "-";
        }else{
            $tanggal = $row["tgl_bayar"];
        }
    ?>
      <tr>
          <td><?= $row["bulan"] ?></td>
          <td><?= $row["tahun"] ?></td>
          <td><?= "Rp " . number_format($row["tagihan"],2,',','.'); ?></td>
          <td><?= $row["status"] ?></td>
          <td><?= $tanggal ?></td>
      </tr>
      <?php endforeach ?>
    