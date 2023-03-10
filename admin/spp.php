<section>
  <h5>Halaman SPP</h5>
  <a href="?url=tambah-spp" class="btn btn-primary">Tambah SPP</a>

  <table class="table table-striped table-bordered">
    <thead>
      <tr class="fw-bold">
        <th>No</th>
        <th>Tahun</th>
        <th>Nominal</th>
        <th>Edit</th>
        <th>Hapus</th>
      </tr>
    </thead>

    <tbody>
      <?php 
      include '../koneksi.php';
      $no = 1;
      $sql = "SELECT * FROM spp ORDER BY id_spp DESC";
      if ($query = mysqli_query($koneksi, $sql)) {
          foreach ($query as $data) { ?>
              <tr>
                  <td><?= $no++ ?></td>
                  <td><?= htmlentities($data['tahun']) ?></td>
                  <td><?= $data['nominal'] ?></td>
                  <td>
                      <a href="?url=edit-spp&id_spp=<?= $data['id_spp'] ?>" class="btn btn-warning">EDIT</a>
                  </td>
                  <td>
                      <a onclick="return confirm('Apakah Anda yakin ingin menghapus data?')" href="?url=hapus-spp&id_spp=<?= $data['id_spp'] ?>" class="btn btn-danger">HAPUS</a>
                  </td>
              </tr>
          <?php }
      } else {
          echo "Error: " . mysqli_error($koneksi);
      }
      mysqli_close($koneksi);
      ?>
    </tbody>
  </table>
</section>
