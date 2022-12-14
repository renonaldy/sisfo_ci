<?php

class Laporan_kkn extends CI_Controller{

  public function index(){
    $data['laporan_kkn'] = $this->laporan_kkn_model->tampil_data('laporan_kkn')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/laporan_kkn', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function tambah_laporan_kkn(){
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/laporan_kkn_form');
    $this->load->view('templates_administrator/footer');
  }

  public function tambah_laporan_kkn_aksi(){
    $this->_rules();
    if($this->form_validation->run() == FALSE){
      $this->tambah_laporan_kkn();
    }
    else{
      $nama          = $this->input->post('nama');
      $tahun         = $this->input->post('tahun');
      $lokasi         = $this->input->post('lokasi');
      $dpl         = $this->input->post('dpl');
      $bukti         = $_FILES['bukti'];
      if($bukti=''){
      }
      else{
        $config['upload_path']   = './assets/laporan_kkn';
        $config['allowed_types'] = 'pdf|docx';

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('bukti')){
          echo "Gagal Upload!";
          die();
        }
        else{
          $bukti = $this->upload->data('file_name');
        }
      }

      $data = array(
        'nama'          => $nama,
        'tahun'    => $tahun,
          'lokasi'    => $lokasi,
          'dpl'    => $dpl,
        'bukti'         => $bukti,
      );

      $this->laporan_kkn_model->insert_data($data, 'laporan_kkn');
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Rekap Laporan KKN berhasil ditambahkan
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
      redirect('administrator/laporan_kkn');
    }
  }

  public function update($id){
    $where = array('nidn' => $id);
    $data['dosen']     = $this->dosen_model->edit_data($where, 'dosen')->result();
    $data['detail']    = $this->dosen_model->ambil_id_dosen($id);
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/dosen_update', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function update_dosen_aksi(){
    $this->_rules();

    if($this->form_validation->run() == FALSE){
      $this->update($id);
    }
    else{
      $id            = $this->input->post('id_dosen');
      $nidn          = $this->input->post('nidn');
      $nik           = $this->input->post('nik');
      $nama_dosen    = $this->input->post('nama_dosen');
      $jenis_kelamin = $this->input->post('jenis_kelamin');
      $program_studi = $this->input->post('program_studi');
      $jabatan       = $this->input->post('jabatan');
      $pangkat       = $this->input->post('pangkat');
      $no_sertifikasi= $this->input->post('no_sertifikasi');
      $photo         = $_FILES['userfile']['name'];
      if($photo){
        $config['upload_path']   = './assets/uploads';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|tiff';

        $this->load->library('upload', $config);
        if($this->upload->do_upload('userfile')){
          $userfile = $this->upload->data('file_name');
          $this->db->set('photo', $userfile);
        }
        else{
          echo "Gagal upload!";
        }
      }

      $data = array(
        'nidn'          => $nidn,
        'nik'           => $nik,
        'nama_dosen'    => $nama_dosen,
        'jenis_kelamin' => $jenis_kelamin,
        'program_studi' => $program_studi,
        'jabatan'       => $jabatan,
        'pangkat'       => $pangkat,
        'no_sertifikasi'=> $no_sertifikasi,
      );

      // print_r($data);
      // die;

      $where = array(
        'id_dosen' => $id,
      );

      $this->dosen_model->update_data($where, $data, 'dosen');
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data dosen berhasil diupdate
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
      redirect('administrator/dosen');
    }
  }

  public function delete($id){
    $where = array('nidn' => $id);
    $this->dosen_model->hapus_data($where, 'dosen');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data dosen berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('administrator/dosen');
  }

  public function _rules(){
    $this->form_validation->set_rules('nama', 'nama', 'required', [
      'required' => 'nama wajib diisi!'
    ]);
    $this->form_validation->set_rules('tahun', 'tahun', 'required', [
      'required' => 'tahun wajib diisi!'
    ]);
       $this->form_validation->set_rules('lokasi', 'lokasi', 'required', [
      'required' => 'lokasi wajib diisi!'
    ]);
       $this->form_validation->set_rules('dpl', 'dpl', 'required', [
      'required' => 'dpl wajib diisi!'
    ]);

  }
}