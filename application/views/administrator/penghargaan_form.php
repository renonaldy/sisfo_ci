<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Input Penghargaan Dosen
  </div>

  <?= form_open_multipart('administrator/penghargaan/tambah_penghargaan_aksi'); ?>

    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="">Nama</label>
          <input type="text" name="nama" class="form-control">
          <?= form_error('nama', '<div class="text-danger small">', '</div>'); ?>
        </div>
          <div class="form-group">
          <label for="">Penghargaan Diperoleh</label>
          <input type="text" name="nama_penghargaan" class="form-control">
          <?= form_error('nama_penghargaan', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Tahun Penghargaan</label>
          <input type="text" name="tahun" class="form-control">
          <?= form_error('tahun', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Lampiran</label><br>
          <input type="file" name="bukti" accept="application/pdf">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Simpan</button>

      </div>
    </div>

  <?php form_close(); ?>
</div>