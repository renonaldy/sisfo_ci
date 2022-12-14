<div class="container-fluid">

  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Rekap Laporan PLP
  </div>

  <?= $this->session->flashdata('pesan'); ?>

  <?= anchor('administrator/laporan_plp/tambah_laporan_plp', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Laporan PLP</button>') ?>

  <table class="table table-striped table-hover table-borderd">
    <tr>
      <th>NO</th>
      <th>Nama</th>
      <th>Tahun KKN</th>
      <th>Lokasi KKN</th>
      <th>Pembimbing</th>
      <th><center>Lampiran</center></th>
      <th colspan="3">AKSI</th>
    </tr>

    <?php 
    $no = 1;
    foreach($laporan_plp as $lplp): ?>
    <tr>
      <td width="20px;"><?= $no++; ?></td>
      <td><?= $lplp->nama; ?></td>
      <td><?= $lplp->tahun; ?></td>
        <td><?= $lplp->lokasi; ?></td>
        <td><?= $lplp->pembimbing; ?></td>
      <td><?= $lplp->bukti; ?></td>
      <td width="20px"><?= anchor('administrator/laporan_plp/update/'.$lplp->nama, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrator/laporan_plp/delete/'.$lplp->nama, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>