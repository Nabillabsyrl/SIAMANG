<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

		public function __construct()
	{
		parent::__construct();
	}

	public function cek_user()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('username', $username)
						  ->where('password', $password)
						  ->get('users');

		if ($query->num_rows() > 0) {
			$data = array(
				'username' => $username,
				'logged_in' => TRUE
				);
			$this->session->set_userdata($data);
			# code...
		return TRUE;
		}else {
			return FALSE;
		}
	}

	public function cek_notif()
	{

		$data = $this->db->query("SELECT * FROM `notifikasi` ORDER BY waktu desc")->result();

		return $data;
	}

	public function cek_jumlah_notif(){
				$jumlah = $this->db->query('SELECT COUNT(id) as Jumlah FROM notifikasi where is_read = 0 ')->result()[0]->Jumlah;
		return $jumlah;
	}

	
}
