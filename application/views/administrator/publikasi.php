<div class="container-fluid">

  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Publikasi Ilmiah
  </div>

  <?= $this->session->flashdata('pesan'); ?>

  <?= anchor('administrator/publikasi/tambah_publikasi', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Publikasi</button>') ?>

  <table class="table table-striped table-hover table-borderd">
    <tr>
      <th>NO</th>
      <th>Nama</th>
      <th>Nama Jurnal / Proshiding</th>
      <th>Kategori Jurnal</th>
      <th><center>Lampiran</center></th>
      <th colspan="3">AKSI</th>
    </tr>

    <?php 
    $no = 1;
    foreach($publikasi as $pbl): ?>
    <tr>
      <td width="20px;"><?= $no++; ?></td>
      <td><?= $pbl->nama; ?></td>
      <td><?= $pbl->nama_jurnal; ?></td>
      <td><?= $pbl->kategori; ?></td>
      <td><?= $pbl->bukti; ?></td>
      <td width="20px"><?= anchor('administrator/publikasi/update/'.$pbl->nama, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrator/publikasi/delete/'.$pbl->nama, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>