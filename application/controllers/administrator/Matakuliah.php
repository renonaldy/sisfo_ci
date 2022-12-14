<?php

class Matakuliah extends CI_Controller{

  public function index(){
    $data['matakuliah'] = $this->matakuliah_model->tampil_data('matakuliah')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/matakuliah',$data);
    $this->load->view('templates_administrator/footer');
  }

  public function tambah_matakuliah(){
    $data['kurikulum'] = $this->matakuliah_model->tampil_data('kurikulum')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/matakuliah_form',$data);
    $this->load->view('templates_administrator/footer');
  }

  public function tambah_matakuliah_aksi(){
    $this->_rules();

    if($this->form_validation->run() == FALSE){
      $this->tambah_matakuliah();
    }
    else{
      $kode_matakuliah = $this->input->post('kode_matakuliah');
      $nama_matakuliah = $this->input->post('nama_matakuliah');
      $sks             = $this->input->post('sks');
      $semester        = $this->input->post('semester');
      $kurikulum      = $this->input->post('kurikulum');

      $data = array(
        'kode_matakuliah' => $kode_matakuliah,
        'nama_matakuliah' => $nama_matakuliah,   
        'sks'             => $sks,
        'semester'        => $semester,
        'kurikulum'      => $kurikulum,
      );

      $this->matakuliah_model->insert_data($data, 'matakuliah');
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data mata kuliah berhasil ditambahkan
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
      redirect('administrator/matakuliah');
    }
  }

  public function _rules(){
    $this->form_validation->set_rules('kode_matakuliah', 'kode_matakuliah', 'required', [
      'required' => 'Kode mata kuliah wajib diisi!'
    ]);
    $this->form_validation->set_rules('nama_matakuliah', 'nama_matakuliah', 'required', [
      'required' => 'Nama mata kuliah wajib diisi!'
    ]);
    $this->form_validation->set_rules('sks', 'sks', 'required', [
      'required' => 'SKS wajib diisi!'
    ]);
    $this->form_validation->set_rules('semester', 'semester', 'required', [
      'required' => 'Semester wajib diisi!'
    ]);
    $this->form_validation->set_rules('kurikulum', 'kurikulum', 'required', [
      'required' => 'Nama kurikulum wajib diisi!'
    ]);
  }

  public function detail($kode){
    $data['detail'] = $this->matakuliah_model->ambil_kode_matakuliah($kode);
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/matakuliah_detail',$data);
    $this->load->view('templates_administrator/footer');
  }

  public function update($id){
    $where = array('kode_matakuliah' => $id);
    $data['matakuliah'] = $this->db->query("SELECT * FROM matakuliah mk, kurikulum kur WHERE mk.kurikulum=kur.kurikulum AND mk.kode_matakuliah='$id'")->result();
    $data['kurikulum'] = $this->matakuliah_model->tampil_data('kurikulum')->result();

    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/matakuliah_update',$data);
    $this->load->view('templates_administrator/footer');
  }

  public function update_aksi(){
    $id              = $this->input->post('kode_matakuliah');
    $kode_matakuliah = $this->input->post('kode_matakuliah');
    $nama_matakuliah = $this->input->post('nama_matakuliah');
    $sks             = $this->input->post('sks');
    $semester        = $this->input->post('semester');
    $kurikulum      = $this->input->post('kurikulum');

    $data = array(
      'kode_matakuliah' => $kode_matakuliah,
      'nama_matakuliah' => $nama_matakuliah,
      'sks'             => $sks,
      'semester'        => $semester,
      'kurikulum'      => $kurikulum,
    );

    // print_r($data);
    // die;

    $where = array(
      'kode_matakuliah' => $id
    );

    $this->matakuliah_model->update_data($where, $data, 'matakuliah');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data mata kuliah berhasil diupdate
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('administrator/matakuliah');
  }

  public function delete($id){
    $where = array('kode_matakuliah' => $id);
    $this->matakuliah_model->hapus_data($where, 'matakuliah');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data matakuliah berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('administrator/matakuliah');
  }
}