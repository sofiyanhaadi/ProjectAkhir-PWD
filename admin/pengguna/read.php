<?php 
    //panggil file koneksi ke database
    include "../../dbconnect.php";
    //sql query tabel data
    $sql = "SELECT * from tb_pengguna order by id_pengguna ASC";
    $query = mysqli_query($conn, $sql);
?>      
    <?php foreach ($query as $row): 
        
        ?>
      <tr>
          <td><?= $row["nama_pengguna"] ?></td>
          <td><?= $row["username"] ?></td>
          <td><?= $row["level"] ?></td>
          <td>
              <button type="button" class="btn btn-warning btn-sm edit" data-id="<?= $row["id_pengguna"] ?>" >Edit</a>
              <button type="button" class="btn btn-danger btn-sm hapus" data-id="<?= $row["id_pengguna"] ?>">Hapus</button>
          </td>
      </tr>
      <?php endforeach ?>
    