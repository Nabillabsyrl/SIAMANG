<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

public function do_insert($foto){
	$data = array(
		'id_artikel' => NULL,
		'judul_artikel' => $this->input->post('judul_artikel'),
		'lokasi'		=> $this->input->post('lokasi'),
		'username'		=> $this->input->post('username'),
		'kategori'		=> $this->input->post('kategori'),
		'tanggal_artikel' => $this->input->post('tanggal_artikel'),
		'konten'		=> $this->input->post('konten'),
		'foto'			=> $foto['file_name']
		);
	$this->db->insert('artikel', $data);

	if($this->db->affected_rows() > 0){
		return TRUE;
	}else{
		return FALSE;
	}
}
public function getartikel(){
    
    return $this->db->get('artikel');
	}
	

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */