<?php 
    //panggil file koneksi ke database
    include "../../dbconnect.php";
    //sql query tabel data
    $sql = "SELECT * from tb_paket order by id_paket ASC";
    $query = mysqli_query($conn, $sql);
?>      
    <?php foreach ($query as $row): ?>
      <tr>
          <td><?= $row["id_paket"] ?></td>
          <td><?= $row["paket"] ?></td>
          <td><?= $row["tarif"] ?></td>
          <td>
              <button type="button" class="btn btn-warning btn-sm edit" data-id="<?= $row["id_paket"] ?>" >Edit</a>
              <button type="button" class="btn btn-danger btn-sm hapus" data-id="<?= $row["id_paket"] ?>">Hapus</button>
          </td>
      </tr>
      <?php endforeach ?>
    