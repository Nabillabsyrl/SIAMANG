<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Komentar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Komentar_model');
        $this->load->model('admin_model');
        $this->load->library('form_validation');
    }

    public function delete($id) 
    {
        $row = $this->Komentar_model->get_detil($id);

      if ($row) {
            $this->Komentar_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/data_komentar'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/data_komentar'));
        }
    }

      public function simpan() 
    {
        if ($this->input->post('submit')){
               
				if($this->Komentar_model->insert() == TRUE){
					$this->session->set_flashdata('message', 'Terimakasih Atas Komentar Anda');
            		redirect(site_url('admin/homey#clients'));


				}else{
					$this->session->set_flashdata('message', 'Penambahan Data Gagal');
            		redirect(site_url('admin/homey#clients'));
				}
        }
        
}

 public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim');
	$this->form_validation->set_rules('komentar', 'komentar', 'trim|required');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}