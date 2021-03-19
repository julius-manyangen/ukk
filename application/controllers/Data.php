<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Data Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->db->get('siswa')->result_array();


        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('name', 'NAME', 'required');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nis' => $this->input->post('nis'),
                'name' => $this->input->post('name'),
                'jk' => $this->input->post('jk'),
                'tgl' => date("Y-m-d H:i:s"),
                'agama' => $this->input->post('agama'),
                'kelas' => $this->input->post('kelas'),
                'jurusan' => $this->input->post('jr')
            ];
            $this->db->insert('siswa', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New sub menu added!</div>');
            redirect('data');
        }
    }
    public function update($id)
    {
        $data['title'] = 'Data Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->db->get('siswa')->result_array();
        $data['getId'] = $this->db->get_where('siswa', ['id' => $id])->row_array();


        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('name', 'NAME', 'required');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data/update', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nis' => $this->input->post('nis'),
                'name' => $this->input->post('name'),
                'jk' => $this->input->post('jk'),
                'tgl' => date("Y-m-d H:i:s"),
                'agama' => $this->input->post('agama'),
                'kelas' => $this->input->post('kelas'),
                'jurusan' => $this->input->post('jr')
            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('siswa', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Data Siswa updated!</div>');
            redirect('data');
        }
    }

    public function Delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('siswa');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">berhasil di Hapus!</div>');
        redirect('data');
    }
}
