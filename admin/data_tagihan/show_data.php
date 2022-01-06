<!-- Konten Tabel -->
<div class="row mt-5 mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <table id="tabel-paket" class="table table-dark table-striped table-bordered table-hover" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Tagihan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $bulan = $_POST['bulan'];
                        $tahun = $_POST['tahun'];

                        if($bulan == 0 && $tahun == 0){
                            echo "
                            <script>
                                alert('Anda belum memasukkan Bulan dan Tahun !');
                                document.location.href = 'data_tagihan.php';
                            </script>
                        ";
                        }if($bulan == 0){
                            echo "
                            <script>
                                alert('Anda belum memasukkan Bulan !');
                                document.location.href = 'data_tagihan.php';
                            </script>
                        ";
                        }if($tahun == 0){
                            echo "
                            <script>
                                alert('Anda belum memasukkan Tahun !');
                                document.location.href = 'data_tagihan.php';
                            </script>
                        ";
                        }else{
                                //panggil file koneksi ke database
                                include "../../dbconnect.php";
                                //sql query tabel data
                                $sql = "SELECT * FROM tb_tagihan INNER JOIN tb_pelanggan ON tb_tagihan.id_pelanggan = tb_pelanggan.id_pelanggan WHERE status='BL' AND bulan='$bulan' AND tahun='$tahun' order by id_tagihan ASC";
                                $query = mysqli_query($conn, $sql);
                            }?>   
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
                                <td><?= "Rp " . number_format($row["tagihan"],2,',','.'); ?></td>
                                <td align="center">
                                    <div class="badge <?= $bg ?> text-wrap" style="width: 6rem;">
                                        <?= $stat ?>
                                    </div>
                                </td>
                                <td>
                                    <a href="data_tagihan.php?page=bayar&kode=<?= $row["id_tagihan"] ?>" class="btn btn-info btn-sm" role="button">Bayar</a>
                                    <button type="button" href="#" class="btn btn-success btn-sm hapus" >WA</button>
                                </td>
                            </tr>
                            <?php endforeach ?>



                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>