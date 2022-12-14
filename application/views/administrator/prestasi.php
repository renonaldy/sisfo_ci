<div class="container-fluid">

  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Prestasi
  </div>

  <?= $this->session->flashdata('pesan'); ?>

  <?= anchor('administrator/prestasi/tambah_prestasi', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Prestasi</button>') ?>

  <table class="table table-striped table-hover table-borderd">
    <tr>
      <th>NO</th>
      <th>Nama Prestasi</th>
      <th>Kategori Prestasi</th>
      <th><center>Lampiran</center></th>
      <th colspan="3">AKSI</th>
    </tr>

    <?php 
    $no = 1;
    foreach($prestasi as $prt): ?>
    <tr>
      <td width="20px;"><?= $no++; ?></td>
      <td><?= $prt->nama_prestasi; ?></td>
      <td><?= $prt->kategori_prestasi; ?></td>
      <td><?= $prt->bukti; ?></td>
      <td width="20px"><?= anchor('administrator/prestasi/update/'.$prt->nama_prestasi, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrator/prestasi/delete/'.$prt->nama_prestasi, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>