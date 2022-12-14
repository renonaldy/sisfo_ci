<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Input Publikasi Ilmiah
  </div>

  <?= form_open_multipart('administrator/publikasi/tambah_publikasi_aksi'); ?>

    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="">Nama</label>
          <input type="text" name="nama" class="form-control">
          <?= form_error('nama', '<div class="text-danger small">', '</div>'); ?>
        </div>
          <div class="form-group">
          <label for="">Nama Jurnal / Proshiding</label>
          <input type="text" name="nama_jurnal" class="form-control">
          <?= form_error('nama_jurnal', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Kategori Jurnal</label>
          <select name="kategori" id="" class="form-control">
            <option value="">--Kategori Jurnal--</option>
            <option>Jurnal Nasional</option>
            <option>Jurnal Nasional Terakreditasi</option>
            <option>Jurnal Internasional</option>
            <option>Jurnal Proshiding</option>
          </select>
          <?= form_error('kategori', '<div class="text-danger small">', '</div>'); ?>
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