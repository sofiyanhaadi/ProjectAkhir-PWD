<?php 
    //panggil file koneksi ke database
    include "../../dbconnect.php";
    //sql query tabel data
    $sql = "SELECT * FROM tb_pelanggan INNER JOIN tb_paket ON tb_pelanggan.id_paket = tb_paket.id_paket order by id_pelanggan ASC";
    $query = mysqli_query($conn, $sql);
?>      
    <?php foreach ($query as $row): ?>
      <tr>
          <td><?= $row["nama"] ?></td>
          <td><?= $row["alamat"] ?></td>
          <td><?= $row["no_hp"] ?></td>
          <td><?= $row["email"] ?></td>
          <td><?= $row["paket"] ?></td>
          <td>
              <button type="button" class="btn btn-warning btn-sm edit" data-id="<?= $row["id_pelanggan"] ?>" >Edit</a>
              <button type="button" class="btn btn-danger btn-sm hapus" data-id="<?= $row["id_pelanggan"] ?>">Hapus</button>
          </td>
      </tr>
    <?php endforeach ?>
    