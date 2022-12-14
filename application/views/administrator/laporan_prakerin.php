<div class="container-fluid">

  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Rekap Laporan Prakerin
  </div>

  <?= $this->session->flashdata('pesan'); ?>

  <?= anchor('administrator/laporan_prakerin/tambah_laporan_prakerin', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Laporan Prakerin</button>') ?>

  <table class="table table-striped table-hover table-borderd">
    <tr>
      <th>NO</th>
      <th>Nama</th>
      <th>Tahun Prakerin</th>
      <th>Lokasi KKN</th>
      <th>Pembimbing</th>
      <th><center>Lampiran</center></th>
      <th colspan="3">AKSI</th>
    </tr>

    <?php 
    $no = 1;
    foreach($laporan_prakerin as $lprk): ?>
    <tr>
      <td width="20px;"><?= $no++; ?></td>
      <td><?= $lprk->nama; ?></td>
      <td><?= $lprk->tahun; ?></td>
        <td><?= $lprk->lokasi; ?></td>
        <td><?= $lprk->pembimbing; ?></td>
      <td><?= $lprk->bukti; ?></td>
      <td width="20px"><?= anchor('administrator/laporan_prakerin/update/'.$lprk->nama, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrator/laporan_prakerin/delete/'.$lprk->nama, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>