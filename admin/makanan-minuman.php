<section>
  <h5>Halaman Makanan & Minuman</h5>
  <a href="?url=tambah-makanan-minuman" class="btn btn-primary">Tambah Menu</a>

  <table class="table table-striped table-bordered">
    <thead>
      <tr class="fw-bold">
        <th>No</th>
        <th>Nama Masakan</th>
        <th>Harga</th>
        <th>Status Masakan</th>
        <th>Edit</th>
        <th>Hapus</th>
      </tr>
    </thead>

    <tbody>
    <?php 
      include '../koneksi.php';
      $no = 1;
      $sql = "SELECT * FROM masakan ORDER BY id_masakan DESC";
      if ($query = mysqli_query($koneksi, $sql)) {
          foreach ($query as $data) { ?>
              <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['nama_masakan'] ?></td>
                  <td><?= $data['harga'] ?></td>
                  <td><?= $data['status_masakan'] ?></td>
                  <td>
                      <a href="?url=edit-makanan-minuman&id_masakan=<?= $data['id_masakan'] ?>" class="btn btn-warning">EDIT</a>
                  </td>
                  <td>
                      <a onclick="return confirm('Apakah Anda yakin ingin menghapus data?')" href="?url=hapus-makanan-minuman&id_masakan=<?= $data['id_masakan'] ?>" class="btn btn-danger">HAPUS</a>
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
