<div class="container-fluid">

  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Penelitian
  </div>

  <?= $this->session->flashdata('pesan'); ?>

  <?= anchor('administrator/penelitian/tambah_penelitian', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Penelitian</button>') ?>

  <table class="table table-striped table-hover table-borderd">
    <tr>
      <th>NO</th>
      <th>Nama</th>
      <th>Judul Penelitian</th>
      <th>Tahun Penelitian</th>
      <th><center>Lampiran</center></th>
      <th colspan="3">AKSI</th>
    </tr>

    <?php 
    $no = 1;
    foreach($penelitian as $pnl): ?>
    <tr>
      <td width="20px;"><?= $no++; ?></td>
      <td><?= $pnl->nama; ?></td>
      <td><?= $pnl->judul; ?></td>
      <td><?= $pnl->tahun; ?></td>
      <td><?= $pnl->bukti; ?></td>
      <td width="20px"><?= anchor('administrator/penelitian/detail/'.$pnl->nama, '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrator/penelitian/update/'.$pnl->nama, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrator/penelitian/delete/'.$pnl->nama, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>