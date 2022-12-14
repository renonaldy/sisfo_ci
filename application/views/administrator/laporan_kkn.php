<div class="container-fluid">

  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Rekap Laporan KKN
  </div>

  <?= $this->session->flashdata('pesan'); ?>

  <?= anchor('administrator/laporan_kkn/tambah_laporan_kkn', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Laporan KKN</button>') ?>

  <table class="table table-striped table-hover table-borderd">
    <tr>
      <th>NO</th>
      <th>Nama</th>
      <th>Tahun KKN</th>
      <th>Lokasi KKN</th>
      <th>DPL</th>
      <th><center>Lampiran</center></th>
      <th colspan="3">AKSI</th>
    </tr>

    <?php 
    $no = 1;
    foreach($laporan_kkn as $lkkn): ?>
    <tr>
      <td width="20px;"><?= $no++; ?></td>
      <td><?= $lkkn->nama; ?></td>
      <td><?= $lkkn->tahun; ?></td>
        <td><?= $lkkn->lokasi; ?></td>
        <td><?= $lkkn->dpl; ?></td>
      <td><?= $lkkn->bukti; ?></td>
      <td width="20px"><?= anchor('administrator/laporan_kkn/update/'.$lkkn->nama, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrator/laporan_kkn/delete/'.$lkkn->nama, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>