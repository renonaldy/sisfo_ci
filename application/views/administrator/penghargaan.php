<div class="container-fluid">

  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Penghargaan
  </div>

  <?= $this->session->flashdata('pesan'); ?>

  <?= anchor('administrator/penghargaan/tambah_penghargaan', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Penghargaan</button>') ?>

  <table class="table table-striped table-hover table-borderd">
    <tr>
      <th>NO</th>
      <th>Nama</th>
      <th>Penghargaan yang Diperoleh</th>
      <th>Tahun Penghargaan</th>
      <th><center>Lampiran</center></th>
      <th colspan="3">AKSI</th>
    </tr>

    <?php 
    $no = 1;
    foreach($penghargaan as $pgh): ?>
    <tr>
      <td width="20px;"><?= $no++; ?></td>
      <td><?= $pgh->nama; ?></td>
      <td><?= $pgh->nama_penghargaan; ?></td>
      <td><?= $pgh->tahun; ?></td>
      <td><?= $pgh->bukti; ?></td>
      <td width="20px"><?= anchor('administrator/penghargaan/update/'.$pgh->nama, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrator/penghargaan/delete/'.$pgh->nama, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>