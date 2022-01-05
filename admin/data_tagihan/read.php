<?php 
    //panggil file koneksi ke database
    include "../../dbconnect.php";
    //sql query tabel data
    $sql = "SELECT * FROM tb_tagihan INNER JOIN tb_pelanggan ON tb_tagihan.id_pelanggan = tb_pelanggan.id_pelanggan order by id_tagihan ASC";
    $query = mysqli_query($conn, $sql);
?>      
    <?php foreach ($query as $row): ?>
      <tr>
          <td><?= $row["nama"] ?></td>
          <td><?= $row["tagihan"] ?></td>
          <td>
              <?php
                if($row['status'] == 'BL'){
                    echo "BELUM LUNAS";
                }else{
                    echo "LUNAS";
                }
                ?>
          </td>
          <td>
              <button type="button" class="btn btn-info btn-sm edit" data-id="<?= $row["id_paket"] ?>">Bayar</a>
              <button type="button" class="btn btn-success btn-sm hapus" data-id="<?= $row["id_paket"] ?>">WA</button>
          </td>
      </tr>
      <?php endforeach ?>
    