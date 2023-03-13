<h5>Halaman Tambah SPP</h5>
<a href="?url=makanan-minuman " class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-tambah-makanan-minuman">
    <div class="form-group mb-2">
        <label for="">Nama Masakan</label>
        <input type="text" name="nama_masakan" class="form-control" required>
    </div>

    <div class="form-group mb-2">
        <label for="">Harga</label>
        <input type="number" name="harga" class="form-control" required>
    </div>

    <div class="form-group mb-2">
        <label for="">Status Masakan</label>
        <input type="status_masakan" name="status_masakan" class="form-control" required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
    </div>
</form>