<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Input Laporan PLP
  </div>

  <?= form_open_multipart('administrator/laporan_plp/tambah_laporan_plp_aksi'); ?>

    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="">Nama</label>
          <input type="text" name="nama" class="form-control">
          <?= form_error('nama', '<div class="text-danger small">', '</div>'); ?>
        </div>
          <div class="form-group">
          <label for="">Tahun Mengikuti PLP</label>
          <input type="text" name="tahun" class="form-control">
          <?= form_error('tahun', '<div class="text-danger small">', '</div>'); ?>
        </div>
           <div class="form-group">
          <label for="">Lokasi PLP</label>
          <input type="text" name="lokasi" class="form-control">
          <?= form_error('lokasi', '<div class="text-danger small">', '</div>'); ?>
        </div>
           <div class="form-group">
          <label for="">Pembimbing</label>
          <input type="text" name="pembimbing" class="form-control">
          <?= form_error('pembimbing', '<div class="text-danger small">', '</div>'); ?>
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