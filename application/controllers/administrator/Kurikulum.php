<?php

class Kurikulum extends CI_Controller{

  public function index(){
    $data['kurikulum'] = $this->kurikulum_model->tampil_data('kurikulum')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/kurikulum', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function tambah_kurikulum(){
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/kurikulum_form');
    $this->load->view('templates_administrator/footer');
  }

  public function tambah_kurikulum_aksi(){
    $this->_rules();

    if($this->form_validation->run() == FALSE){
      $this->tambah_kurikulum();
    }
    else{
      $kurikulum = $this->input->post('kurikulum');
      $status         = $this->input->post('status');

      $data = array(
        'kurikulum' => $kurikulum  , 
        'status'         => $status,
      );

      $this->kurikulum_model->insert_data($data, 'kurikulum');
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data tahun akademik berhasil ditambahkan
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
      redirect('administrator/kurikulum');
    }
  }

  public function update($id){
    $where = array('id_kurikulum' => $id);
    $data['kurikulum'] = $this->kurikulum_model->edit_data($where, 'kurikulum')->result();

    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/kurikulum_update', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function update_aksi(){
    $id             = $this->input->post('id');
    $kurikulum = $this->input->post('kurikulum');
    $status         = $this->input->post('status');

    $data = array(
      'kurikulum' => $kurikulum,
      'status'         => $status,
    );

    $where = array('id_kurikulum' => $id);

    $this->kurikulum_model->update_data($where, $data, 'kurikulum');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data tahun akademik berhasil diupdate
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('administrator/kurikulum');
  }

  public function delete($id){
    $where = array('id_kurikulum' => $id);
    $this->kurikulum_model->hapus_data($where, 'kurikulum');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data tahun akademik berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('administrator/kurikulum');
  }

  public function _rules(){
    $this->form_validation->set_rules('kurikulum', 'kurikulum', 'required', [
      'required' => 'Kurikulum wajib diisi!'
    ]);
    $this->form_validation->set_rules('status', 'status', 'required', [
      'required' => 'Status wajib diisi!'
    ]);
  }
}