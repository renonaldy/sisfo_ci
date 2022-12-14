<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Input Prestasi
  </div>

  <?= form_open_multipart('administrator/prestasi/tambah_prestasi_aksi'); ?>

    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="">Nama Prestasi</label>
          <input type="text" name="nama_prestasi" class="form-control">
          <?= form_error('nama_prestasi', '<div class="text-danger small">', '</div>'); ?>
        </div>
          <div class="form-group">
          <label for="">Kategori Prestasi</label>
          <select name="kategori_prestasi" id="" class="form-control">
            <option value="">--Kategori Prestasi--</option>
            <option>Prestasi Akademik</option>
            <option>Prestasi Non Akademik</option>
          </select>
          <?= form_error('kategori_prestasi', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Bukti</label><br>
          <input type="file" name="bukti" accept="application/pdf">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Simpan</button>

      </div>
    </div>

  <?php form_close(); ?>
</div>