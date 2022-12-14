<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Input Kurikulum
  </div>
  <form action="<?= base_url('administrator/kurikulum/tambah_kurikulum_aksi') ?>" method="post">
        <div class="form-group">
          <label for="">Kurikulum</label>
            <select name="kurikulum" id="" class="form-control">
            <option value="">--Pilih Kurikulum--</option>
            <option>KBK-KKNI</option>
            <option>Kurikulum Default</option>
            <option>Kurikulum NoAktif</option>
            <option>Revolusi Industri 4.0</option>
          </select>
          <?= form_error('<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Status</label>
          <select name="status" id="" class="form-control">
            <option value="">--Pilih Status--</option>
            <option>Aktif</option>
            <option>Tidak Aktif</option>
          </select>
          <?= form_error('status', '<div class="text-danger small">', '</div>'); ?>
        </div>
    
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>
</div>