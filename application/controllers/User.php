<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("users_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function view_profile()
    {
        $user = $this->users_model;
        $data['hasil'] = $user->getProfile();
        if($data != false){
            $this->load->view('profil', $data);
        } else {
            $this->load->view('profil');
        }
    }

    public function proses()
    {
        $user = $this->users_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            if ($user->cekUserLogin()) {
                redirect(base_url());
            } else {
                // TODO tampilkan user salah email / password
                redirect(base_url('index.php/User'));
            }
        } else {
            // TODO tampilkan user salah input
            redirect(base_url('index.php/User'));
        }
    }
}