<?php 
    //panggil file koneksi ke database
    include "../../dbconnect.php";
    //sql query tabel data
    $sql = "SELECT * FROM tb_tagihan INNER JOIN tb_pelanggan ON tb_tagihan.id_pelanggan = tb_pelanggan.id_pelanggan WHERE status='LS' order by id_tagihan ASC";
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
        ?>
      <tr>
          <td><?= $row["nama"] ?></td>
          <td><?= $row["bulan"] ?></td>
          <td><?= $row["tahun"] ?></td>
          <td><?= "Rp " . number_format($row["tagihan"],2,',','.'); ?></td>
          <td align="center"><div class="badge <?= $bg ?> text-wrap" style="width: 6rem;">
            <?= $stat ?>
            </div>
          </td>
          <td><?= $row["tgl_bayar"] ?></td>
      </tr>
    <?php endforeach ?>
    