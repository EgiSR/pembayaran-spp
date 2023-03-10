<h5>Halaman Tambah petugas</h5>
<a href="?url=petugas" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-tambah-petugas">
    <div class="form-group mb-2">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control" autocomplete="off" required>
    </div>

    <div class="form-group mb-2">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="form-group mb-2">
        <label for="">Nama Petugas</label>
        <input type="nama_petugas" name="nama_petugas" class="form-control" required>
    </div>

    <div class="form-group mb-2">
        <label for="">Level</label>
        <select name="level" id="" class="form-control">
            <option value="">Pilih Level Petugas</option>
            <option value="admin">admin</option>
            <option value="petugas">petugas</option>
        </select>
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>
    
</form>