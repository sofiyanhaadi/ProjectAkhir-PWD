<?php 
    //panggil file koneksi ke database
    include "../../dbconnect.php";
    //sql query
    $pass = $_SESSION['password'];
    $caridata = mysqli_query($conn, "SELECT * FROM tb_pelanggan WHERE password='$pass'");
    $data = mysqli_fetch_assoc($caridata);
    $id_pelanggan = $data['id_pelanggan'];

    //sql query
    $sql = "SELECT * from tb_tagihan WHERE id_pelanggan=$id_pelanggan";
    $query = mysqli_query($conn, $sql);
?>      
    <?php foreach ($query as $row):
        if($row['status'] == 'BL'){
            $stat = "Belum Lunas";
            $bg = "bg-danger";
        }else{
            $stat = "Lunas";
            $bg = "bg-success";
        }

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
          <td align="center"><div class="badge <?= $bg ?> text-wrap" style="width: 6rem;">
            <?= $stat ?>
            </div>
          </td>
          <td><?= $tanggal ?></td>
      </tr>
      <?php endforeach ?>
    