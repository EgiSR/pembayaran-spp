<h5>Halaman SPP</h5>
<a href="?url=tambah-siswa" class="btn btn-primary"> Tambah Siswa</a>
<hr>
<table class="table table-striped table-bordered">
    <thead>
        <tr class="fw-bold">
            <th>No</th>
            <th>NISN</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>SPP</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        include '../koneksi.php';
        $no = 1; 
        $sql = "SELECT * FROM siswa , spp , kelas WHERE siswa.id_kelas = kelas.id_kelas AND siswa.id_spp = spp.id_spp ORDER BY nama ASC ";
        $query = mysqli_query($koneksi, $sql);
        while ($data = mysqli_fetch_array($query)) {
            $data_pembayaran = mysqli_query($koneksi , "SELECT SUM(jumlah_bayar) as jumlah_bayar FROM pembayaran WHERE nisn='$data[nisn]'");
            $data_pembayaran = mysqli_fetch_array($data_pembayaran);
            $sudah_bayar = $data_pembayaran['jumlah_bayar'];
            $kekurangan = $data['nominal'] - $data_pembayaran['jumlah_bayar'];
        ?>

            <tr>
        <td><?= $no++; ?></td> 
        <td><?= $data['nisn'] ?></td>
        <td><?= $data['nis'] ?></td>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['nama_kelas'] ?></td>
        <td><?= $data['alamat'] ?></td>
        <td><?= $data['no_telp'] ?></td>
        <td><?= number_format($data['nominal'],2,',','.'); ?></td>
        <td>
            <a href="?url=edit-siswa&nisn=<?= $data['nisn'] ?>" class="btn btn-warning">EDIT</a>
        </td>
        <td>
            <a onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="?url=hapus-siswa&nisn=<?= $data['nisn'] ?>" class="btn btn-danger">HAPUS</a>
        </td>
    </tr>

    <?php } ?>
</tbody>

</table>