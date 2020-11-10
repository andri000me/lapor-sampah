<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Lapor Sampah';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
    public function daftar()
    {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password tidak cocok',
            'min_length' => 'Minimal password adalah 6 karakter'

        ]);
        $this->form_validation->set_rules('password2', 'Re-Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daftar | Lapor Sampah';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('home/daftar');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'level' => 'pelapor'

            ];
            $this->db->insert('user', $data);
            redirect('auth');
        }
    }
}
