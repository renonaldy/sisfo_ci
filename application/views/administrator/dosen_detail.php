<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-eye"></i> Detail Dosen
  </div>

  <table class="table table-bordered table-hover table-striped">

    <?php foreach($detail as $dtl): ?>
      <img class="mb-2" src="<?= base_url('assets/uploads/').$dtl->photo; ?>" alt="" style="width:20%;">
      <tr>
        <th>NIDN</th>
        <td><?= $dtl->nidn; ?></td>
      </tr>
       <tr>
        <th>NIK</th>
        <td><?= $dtl->nik; ?></td>
      </tr>
      <tr>
        <th>NAMA DOSEN</th>
        <td><?= $dtl->nama_dosen; ?></td>
      </tr>
      <tr>
        <th>JENIS KELAMIN</th>
        <td><?= $dtl->jenis_kelamin; ?></td>
      </tr>
      <tr>
        <th>PROGRAM STUDI</th>
        <td><?= $dtl->program_studi; ?></td>
      </tr>
      <tr>
        <th>JABATAN</th>
        <td><?= $dtl->jabatan; ?></td>
      </tr>
        <tr>
        <th>PANGKAT</th>
        <td><?= $dtl->pangkat; ?></td>
      </tr>
        <tr>
        <th>NO SERTIFIKASI DOSEN</th>
        <td><?= $dtl->no_sertifikasi; ?></td>
      </tr>


    <?php endforeach; ?>
  </table>

  <?= anchor('administrator/dosen', '<div class="btn btn-primary btn-sm mb-5">Kembali</div>') ?>
  
</div>