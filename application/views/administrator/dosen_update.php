<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Update Dosen
  </div>

  <?php foreach($dosen as $dsn): ?>
  <?= form_open_multipart('administrator/dosen/update_dosen_aksi'); ?>

    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="">NIDN</label>
          <input type="hidden" name="id_dosen" value="<?= $dsn->id_dosen; ?>">
          <input type="text" name="nidn" class="form-control" value="<?= $dsn->nidn; ?>">
          <?= form_error('nidn', '<div class="text-danger small">', '</div>'); ?>
        </div>
          <div class="form-group">
          <label for="">NIK</label>
          <input type="hidden" name="nik" value="<?= $dsn->nik; ?>">
          <input type="text" name="nik" class="form-control" value="<?= $dsn->nik; ?>">
          <?= form_error('nik', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Nama Dosen</label>
          <input type="text" name="nama_dosen" class="form-control" value="<?= $dsn->nama_dosen; ?>">
          <?= form_error('nama_dosen', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Jenis Kelamin</label>
          <select name="jenis_kelamin" id="" class="form-control" value="<?= $dsn->jenis_kelamin; ?>">
            <option>Laki-laki</option>
            <option>Perempuan</option>
          </select>
          <?= form_error('jenis_kelamin', '<div class="text-danger small">', '</div>'); ?>
        </div>
           <div class="form-group">
          <label for="">Program Studi</label>
          <select name="program_studi" id="" class="form-control" value="<?= $dsn->program_studi; ?>">
            <option>Pendidikan Teknik Informatika dan Komputer</option>
          </select>
          <?= form_error('program_studi', '<div class="text-danger small">', '</div>'); ?>
        </div>
           <div class="form-group">
          <label for="">Jabatan Fungsional</label>
          <select name="jabatan" id="" class="form-control" value="<?= $dsn->jabatan; ?>">
            <option>Asisten Ahli</option>
            <option>Lektor (200 kum)</option>
            <option>Lektor (300 kum)</option>
            <option>Lektor Kepala (400 kum)</option>
            <option>Lektor Kepala (550 kum)</option>
            <option>Lektor Kepala (700 kum)</option>
            <option>Profesor (850 kum)</option>
            <option>Profesor (1050 kum)</option>
          </select>
          <?= form_error('jabatan', '<div class="text-danger small">', '</div>'); ?>
        </div>
           <div class="form-group">
          <label for="">Pangkat</label>
          <select name="pangkat" id="" class="form-control" value="<?= $dsn->pangkat; ?>">
            <option>Penata Muda Gol. III/a</option>
            <option>Penata Muda Tk. I Gol III/b</option>
            <option>Penata Gol. III/c</option>
            <option>Penata Tk. I Gol. III/d</option>
            <option>Pembina Gol. IV/a</option>
            <option>Pembina Tk. I Gol IV/b</option>
            <option>Pembina Utama Muda Gol. IV/c</option>
            <option>Pembina Utama Madya Gol. IV/d</option>
            <option>Pembina Utama Gol. IV/e</option>
          </select>
          <?= form_error('pangkat', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">No. Sertifikasi Dosen</label>
          <input type="text" name="no_sertifikasi" class="form-control" value="<?= $dsn->no_sertifikasi; ?>">
          <?= form_error('no_sertifikasi', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <?php foreach($detail as $dtl): ?>
            <img src="<?= base_url('assets/uploads/').$dsn->photo; ?>" style="width:20%;">
          <?php endforeach; ?><br><br>
          <label for="">Foto</label><br>
          <input type="file" name="userfile" value="<?= $dsn->photo; ?>">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Simpan</button>

      </div>
    </div>

  <?php form_close(); ?>
  <?php endforeach; ?>
</div>