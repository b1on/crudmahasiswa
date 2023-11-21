<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Calon_presiden extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Calon_presiden_model');
  }

  public function index()
  {
    $data['judul'] = "Calon Presiden";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['calon_presiden'] = $this->Calon_presiden_model->get();
    $this->load->view('layout/header', $data);
    $this->load->view('calon_presiden/vw_calon_presiden', $data);
    $this->load->view('layout/footer');
  }

  public function tambah() {
    
    $data['judul'] = "Tambah Calon Presiden";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['calon_presiden'] = $this->Calon_presiden_model->get();
    $this->load->view('layout/header', $data);
    $this->load->view('calon_presiden/vw_tambah_calon_presiden', $data);
    $this->load->view('layout/footer');
  }

  public function edit($id) {

    $data['judul'] = "Edit Calon Presiden";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['calon_presiden'] = $this->Calon_presiden_model->getById($id);
    $this->load->view('layout/header', $data);
    $this->load->view('calon_presiden/vw_edit_calon_presiden', $data);
    $this->load->view('layout/footer');
  }

  public function upload() {
    $data = [
      'nik' => $this->input->post('nik'),
      'nama_lengkap' => $this->input->post('nama_lengkap'),
      'asal' => $this->input->post('asal'),
      'partai_pendukung' => $this->input->post('partai_pendukung'),
      'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
      'umur' => $this->input->post('umur'),
    ];
    $this->Calon_presiden_model->insert($data);
    redirect('Calon_presiden');
  }

  public function delete($id) {
    $this->Calon_presiden_model->delete($id);
    redirect('Calon_presiden');
  }

  public function update() {
    $data = [
      'nik' => $this->input->post('nik'),
      'nama_lengkap' => $this->input->post('nama_lengkap'),
      'asal' => $this->input->post('asal'),
      'partai_pendukung' => $this->input->post('partai_pendukung'),
      'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
      'umur' => $this->input->post('umur'),
    ];
    $id = $this->input->post('id');
    $this->Calon_presiden_model->update($data, ['id' => $id]);
    redirect('Calon_presiden');
  }

}


/* End of file Calon_presiden.php */
/* Location: ./application/controllers/Calon_presiden.php */