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

    public function login()
    {
        // $this->load->view('login');
        $this->load->view('login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('login');
    }

    public function index()
    {
        $email = $this->session->userdata('email');
        if (!isset($email)) {
            redirect(base_url('index.php/User/login'));
        }
        $user = $this->users_model;
        $data['hasil'] = $user->getProfile();
        if($data != false){
            $this->load->view('profil', $data);
        } else {
            $this->load->view('profil');
        }
    }

    public function getAllUser(){
        $kategori = $this->users_model;
        $data['list_user'] = $kategori->getUser();
        $this->load->view('list_user', $data);
    }
    public function getAllAdmin(){
        $kategori = $this->users_model;
        $data['list_user'] = $kategori->getAdmin();
        $this->load->view('list_admin', $data);
    }

    public function proses()
    {
        $user = $this->users_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            if ($user->cekUserLogin()) {
                redirect(base_url());
                // $this->load->view('admin');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger"><strong>Login gagal! Periksa username dan password</strong></div>');
                // TODO tampilkan user salah email / password
                redirect(base_url('index.php/User/login'));
            }
        } else {
            // TODO tampilkan user salah input
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger"><strong>Login gagal! Periksa username dan password</strong></div>');
            redirect(base_url('index.php/User/login'));
        }
    }
    public function keDaftar(){
        $this->load->view('register');
    }
    public function Ganti(){
        $this->load->view('ganti');
    }
    public function gantipswd(){
        $this->load->view('login');
    }

    public function daftar($id=1)
    {
        $input = $this->input->post();
        if (count($input) > 0){
            $user = $this->users_model;
            if($user->add_user()){
                echo "sukses";
                // TODO sukses mendaftar dan tampilkan informasi menunggu proses validasi panitia
            } else {
                echo "gagal";
                // TODO tampilkan gagal
            }
        }
        if($id == 0){
            redirect(base_url("index.php/User/getAllUser"));
        } else if($id == 1){
            $this->load->view('register');
        }
        

    }

    public function daftar_admin()
    {
        $input = $this->input->post();
        if (count($input) > 0){
            $user = $this->users_model;
            if($user->add_user_admin()){
                echo "sukses";
                // TODO sukses mendaftar dan tampilkan informasi menunggu proses validasi panitia
            } else {
                echo "gagal";
                // TODO tampilkan gagal
            }
        }
        redirect(base_url("index.php/User/getAllAdmin"));
        

    }
}