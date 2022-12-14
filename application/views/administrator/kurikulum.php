<div class="container-fluid">

  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Kurikulum
  </div>

  <?= $this->session->flashdata('pesan'); ?>

  <?= anchor('administrator/kurikulum/tambah_kurikulum', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Kurikulum</button>') ?>

  <table class="table table-hover table-bordered table-striped">
    <tr>
      <th>NO</th>
      <th>Kurikulum</th>
      <th>STATUS</th>
      <th colspan="2">AKSI</th>
    </tr>

    <?php
    $no = 1;
    foreach($kurikulum as $kur): ?>
    <tr>
      <td width="20px;"><?= $no++; ?></td>
      <td><?= $kur->kurikulum; ?></td>
      <td><?= $kur->status; ?></td>
      <td width="20px"><?= anchor('administrator/kurikulum/update/'.$kur->id_kurikulum, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrator/kurikulum/delete/'.$kur->id_kurikulum, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>