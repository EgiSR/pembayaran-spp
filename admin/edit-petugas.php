<?php 
$id_petugas = $_GET['id_petugas'];
include'../koneksi.php';
$sql = "SELECT *FROM petugas WHERE id_petugas='$id_petugas'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
include'../koneksi.php';
?>

<h5>Halaman Edit petugas</h5>
<a href="?url=petugas" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-edit-petugas&id_petugas=<?= $id_petugas; ?>">

    <div class="form-group mb-2">
        <label for="">Username</label>
        <input value="<?= $data['username'] ?>" type="text" name="username" class="form-control" autocomplete="off" required>
    </div>

    <div class="form-group mb-2">
        <label for="">Password</label>
        <input value="<?= $data['password'] ?>" type="password" name="password" class="form-control" required>
    </div>

    <div class="form-group mb-2">
        <label for="">Nama Petugas</label>
        <input value="<?= $data['nama_petugas'] ?>" type="nama_petugas" name="nama_petugas" class="form-control" required>
    </div>

    <div class="form-group mb-2">
        <label for="">Level</label>
        <select name="level" id="" class="form-control">
            <option value="<?= $data['level'] ?>"><?= $data['level'] ?></option>
            <option value="admin">admin</option>
            <option value="petugas">petugas</option>
        </select>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>
</form>