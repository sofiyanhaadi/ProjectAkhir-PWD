<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="z-index: 100;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pelanggan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- FORM TAMBAH -->
            <form method="post" action="aksi_insert.php?act=tambahpelanggan" role="form">
                    <div class="mb-3">
                        <label for="inputNama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputAlamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputNoHp" class="form-label">No HP</label>
                        <input type="text" class="form-control" name="no_hp" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Paket</label>
                        <select class="form-select" aria-label="Default select example" name="paket" required>
                            <option selected disabled>--Pilih paket--</option>
                            <?php
                                include("../../dbconnect.php");
                                $sql = "SELECT * from tb_paket";
                                $query = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_array($query)){
                                    echo "<option value='$row[id_paket]'>$row[paket]</option>";
                                }
                            ?>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" id="tombolSubmit">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
