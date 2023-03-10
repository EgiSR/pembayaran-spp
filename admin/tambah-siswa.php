<h5>Halaman Tambah SPP</h5>
<a href="?url=siswa" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-tambah-siswa">
    <div class="form-group mb-2">
        <label for="">NISN</label>
        <input type="number" name="nisn" class="form-control" required>
    </div>

    <div class="form-group mb-2">
        <label for="">NIS</label>
        <input type="number" name="nis" class="form-control" required>
    </div>

    <div class="form-group mb-2">
        <label for="">Nama</label>  
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="form-group mb-2">
        <label for="">Kelas</label>
        <select name="id_kelas" id="" class="form-control">
            <option value="">Pilih Kelas</option>
            <?php 
            include '../koneksi.php';
            $kelas = mysqli_query($koneksi, "SELECT *FROM kelas ORDER BY nama_kelas ASC");
            foreach($kelas as $data_kelas) {
            ?>
            <option value="<?= $data_kelas['id_kelas'] ?>"> <?= $data_kelas['nama_kelas'] ?> </option>
            <?php } ?>
            opti
        </select>
    </div>

    <div class="form-group mb-2">
        <label for="">Alamat</label>
        <textarea name="alamat" class="form-control" required></textarea>
    </div>

    <div class="form-group mb-2">
        <label for="">No Telepon</label>
        <input type="number" name="no_telp" class="form-control" required>
    </div>

    <div class="form-group mb-2">
        <label for="">SPP</label>
        <select name="id_spp" id="" class="form-control">
            <option value="">Pilih SPP</option>
            <?php 
            include '../koneksi.php';
            $spp = mysqli_query($koneksi, "SELECT *FROM spp ORDER BY id_spp ASC");
            foreach($spp as $data_spp) {
            ?>
            <option value="<?= $data_spp['id_spp'] ?>"> <?= $data_spp['tahun'] ?> | <?= number_format($data_spp['nominal'],2,',','.'); ?> </option>
            <?php } ?>
            opti
        </select>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>
</form>