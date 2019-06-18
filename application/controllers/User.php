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

    public function register()
    {
        $this->load->view('register');
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

    public function daftar()
    {
        $user = $this->users_model;
        if($user->add_user()){
            echo "sukses";
            $this->load->view('register');
            // TODO sukses mendaftar dan tampilkan informasi menunggu proses validasi panitia
        } else {
            echo "gagal";
            $this->load->view('register');
            // TODO tampilkan gagal
        }
    }
}