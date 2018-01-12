<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Genre extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Genre_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'genre/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'genre/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'genre/index.html';
            $config['first_url'] = base_url() . 'genre/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Genre_model->total_rows($q);
        $genre = $this->Genre_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'genre_data' => $genre,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['main_view'] = 'genre/genre_list';
        $this->load->view('template', $data);
        /*$this->load->view('genre/genre_list', $data);*/
    }

    public function read($id) 
    {
        $row = $this->Genre_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_genre' => $row->id_genre,
		'nama_genre' => $row->nama_genre,
	    );
            $data['main_view'] = 'genre/genre_read';
            $this->load->view('template', $data);
           /* $this->load->view('genre/genre_read', $data);*/
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('genre'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('genre/create_action'),
	    'id_genre' => set_value('id_genre'),
	    'nama_genre' => set_value('nama_genre'),
	);
        $data['main_view'] = 'genre/genre_form';
        $this->load->view('template', $data);
        /*$this->load->view('genre/genre_form', $data);*/
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        'id_genre' => $this->input->post('id_genre',TRUE),
		'nama_genre' => $this->input->post('nama_genre',TRUE),
	    );

            $this->Genre_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('genre'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Genre_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('genre/update_action'),
		'id_genre' => set_value('id_genre', $row->id_genre),
		'nama_genre' => set_value('nama_genre', $row->nama_genre),
	    );
            $data['main_view'] = 'genre/genre_list';
            $this->load->view('template', $data);
            /*$this->load->view('genre/genre_form', $data);*/
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('genre'));
        }
    }
    
    
  /*  public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_genre', TRUE));
        } else {
            $data = array(
        'nama_genre' => $this->input->post('nama_genre',TRUE),
        );

            $this->Jenis_model->update($this->input->post('id_genre', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jenis'));
        }
    }
*/
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_genre', TRUE));
        } else {
            $data = array(
        'id_genre' => $this->input->post('id_genre',TRUE),
		'nama_genre' => $this->input->post('nama_genre',TRUE),
	    );

            $this->Genre_model->update($this->input->post('id_genre', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('genre'));
        }
    }


    
    public function delete($id) 
    {
        $row = $this->Genre_model->get_by_id($id);

        if ($row) {
            $this->Genre_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('genre'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('genre'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_genre', 'nama genre', 'trim|required');

	$this->form_validation->set_rules('id_genre', 'id_genre', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Genre.php */
/* Location: ./application/controllers/Genre.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-01-04 03:23:56 */
/* http://harviacode.com */