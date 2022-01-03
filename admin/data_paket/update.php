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
                        <input type="hidden" class="form-control" name="idpaket" id="id_paket" readonly>
                    <div class="mb-3">
                        <label for="inputPaket" class="form-label">Paket</label>
                        <input type="text" class="form-control" name="paket" id="paket" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputTarif" class="form-label">Tarif</label>
                        <input type="number" class="form-control" name="tarif" id="tarif" required>
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