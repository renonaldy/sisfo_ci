<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-edit"></i> Form Update Kurikulum
  </div>

  <?php foreach($kurikulum as $kur): ?>
  <form action="<?= base_url('administrator/kurikulum/update_aksi') ?>" method="post">
    <div class="row">
      <div class="col-md-6">
       
        <div class="form-group">
          <label for="">Kurikulum</label>
          <select name="semester" id="" class="form-control" value="<?= $kur->kurikulum; ?>">
            <option><?= $kur->kurikulum; ?></option>
            <option>KBK-KKNI</option>
            <option>Kurikulum Default</option>
            <option>Kurikulum NoAktif</option>
            <option>Revolusi Industri 4.0</option>
          </select>
          <?= form_error('kurikulum', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Status</label>
          <select name="status" id="" class="form-control" value="<?= $kur->status; ?>">
            <option><?= $kur->status; ?></option>
            <option>Aktif</option>
            <option>Tidak Aktif</option>
          </select>
          <?= form_error('status', '<div class="text-danger small">', '</div>'); ?>
        </div>
    
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>

  <?php endforeach; ?>
</div>