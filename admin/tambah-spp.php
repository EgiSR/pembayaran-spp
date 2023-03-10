<h5>Halaman Tambah SPP</h5>
<a href="?url=spp" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-tambah-spp">
    <div class="form-group mb-2">
        <label for="">Tahun</label>
        <input type="number" name="tahun" maxlength="4" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Nominal</label>
        <input type="number" name="nominal" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>
</form>