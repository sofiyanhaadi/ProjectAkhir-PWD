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
            <td><?= $row["paket"] ?></td>
            <td><?= $row["tarif"] ?></td>
        </tr>
      <?php endforeach ?>
    