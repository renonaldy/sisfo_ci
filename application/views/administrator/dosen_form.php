<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Input Dosen
  </div>

  <?= form_open_multipart('administrator/dosen/tambah_dosen_aksi'); ?>

    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="">NIDN</label>
          <input type="text" name="nidn" class="form-control">
          <?= form_error('nidn', '<div class="text-danger small">', '</div>'); ?>
        </div>
          <div class="form-group">
          <label for="">NIK</label>
          <input type="text" name="nik" class="form-control">
          <?= form_error('nik', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Nama Dosen</label>
          <input type="text" name="nama_dosen" class="form-control">
          <?= form_error('nama_dosen', '<div class="text-danger small">', '</div>'); ?>
        </div>
          <div class="form-group">
          <label for="">Jenis Kelamin</label>
          <select name="jenis_kelamin" id="" class="form-control">
            <option value="">--Pilih jenis kelamin--</option>
            <option>Laki-laki</option>
            <option>Perempuan</option>
          </select>
          <?= form_error('jenis_kelamin', '<div class="text-danger small">', '</div>'); ?>
        </div>
          <div class="form-group">
          <label for="">Program Studi</label>
          <select name="program_studi" id="" class="form-control">
            <option value="">--Pilih Program Studi--</option>
            <option>Pendidikan Teknik Informatika dan Komputer</option>
          </select>
          <?= form_error('program_studi', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Jabatan Fungsional</label>
          <select name="jabatan" id="" class="form-control">
            <option value="">--Pilih Jabatan--</option>
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
          <select name="pangkat" id="" class="form-control">
            <option value="">--Pilih Pangkat--</option>
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
          <input type="text" name="no_sertifikasi" class="form-control">
          <?= form_error('no_sertifikasi', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Foto</label><br>
          <input type="file" name="photo">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Simpan</button>

      </div>
    </div>

  <?php form_close(); ?>
</div>