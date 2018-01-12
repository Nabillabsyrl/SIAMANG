<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	  public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('acara_model');
		$this->load->model('komentar_model');
		$this->notifikasi = $this->admin_model->cek_notif();

		$this->notifikasiCount = $this->admin_model->cek_jumlah_notif();
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == true)
		{
			redirect(base_url('index.php/admin/home'));
		}else{
			$this->load->view('login');
		}
	}


	public function homey(){
		$data['acara'] = $this->acara_model->get_data_acara();
		$data['konten'] = 'konten_all_view';
		$this->load->view('home/index',$data);
	}


	public function login()
	{
		if ($this->input->post('submit')) 
			# code..
		
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if($this->form_validation->run()==TRUE){
				if($this->admin_model->cek_user() == TRUE){
					redirect(base_url('index.php/admin/home'));
				}else{
					$data['notif'] = "Login Gagal";
					$this->load->view('login', $data);
			}
				}else{
			$data['notif'] = validation_errors();
			$this->load->view('login', $data);

	}
	}

	
	public function home()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$data['main_view'] = 'acara/acara_list';
			$data['acara'] = $this->acara_model->get_data_acara();
			$data['notifikasi'] = $this->notifikasi;
			$data['notifikasi_count'] = $this->notifikasiCount;
			$this->load->view('template', $data);
		}else{
			$this->load->view('login');
		}
	}

	 public function form_acara(){
        if ($this->session->userdata('logged_in') == TRUE ){
            $data['main_view'] = 'acara/acara_form';
            $data['notifikasi'] = $this->notifikasi;
			$data['notifikasi_count'] = $this->notifikasiCount;
            $this->notifikasi = $this->admin_model->cek_notif();
        	$this->notifikasiCount = $this->admin_model->cek_jumlah_notif();
            $this->load->view('template', $data);
        }else{
            redirect('login');
        }

    }

    public function form_komentar(){
    		if ($this->session->userdata('logged_in') == TRUE ){
            $data['main_view'] = 'komentar/komentar_form';

			$data['notifikasi'] = $this->notifikasi;
			$data['notifikasi_count'] = $this->notifikasiCount;

            $this->load->view('home/index', $data);
        }else{
            redirect('login');
        }	
    }

	public function data_acara() {
        if ($this->session->userdata('logged_in') == TRUE) {
        	$data['main_view'] = 'acara/acara_list';
			$data['acara'] = $this->acara_model->get_data_acara();
			$data['notif'] = $this->komentar_model->get_data_notif();
			$this->komentar_model->setDibaca();
			$data['notifikasi'] = $this->notifikasi;
			$data['notifikasi_count'] = $this->notifikasiCount;
			$this->load->view('template', $data);
		}else{
			$this->load->view('login');
		}
    }

    public function data_komentar() {
        if ($this->session->userdata('logged_in') == TRUE) {
        	$data['main_view'] = 'komentar/komentar_list';
			$data['komentar'] = $this->komentar_model->get_data_komentar();
			$data['notif'] = $this->komentar_model->get_data_notif();
			$this->komentar_model->setDibaca();
			$data['notifikasi'] = $this->notifikasi;
			$data['notifikasi_count'] = $this->notifikasiCount;
			$this->load->view('template', $data);
		}else{
			$this->load->view('login');
		}
 
    }

	public function logout()
	{
		$data = array(
			'username' => '',
			'logged_in' => FALSE
			);
		$this->session->sess_destroy();
		redirect('admin/login');
	}


}