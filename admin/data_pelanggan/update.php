<div class="modal fade modal-update" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Data Paket</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- FORM UPDATE -->
            <form method="post" action="aksi_update.php?act=updatepaket" role="form">
                        <input type="hidden" class="form-control" name="id_pelanggan" id="id_pelanggan">
                    <div class="mb-3">
                        <label for="inputNama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputAlamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputNoHp" class="form-label">No HP</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Paket</label>
                        <select class="form-select" aria-label="Default select example" name="paket" id="paket" required>
                            <option required disabled>--Pilih paket--</option>
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