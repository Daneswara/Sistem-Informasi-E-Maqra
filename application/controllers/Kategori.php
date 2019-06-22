<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public $access;
    public function __construct()
    {
        parent::__construct();
        $this->load->model("kategori_model");
        $this->load->library('form_validation');
        $email = $this->session->userdata('email');
        $this->access = $this->session->userdata('access');
        if (!isset($email)) {
            redirect(base_url('index.php/User/login'));
        }
    }

    public function index()
    {
        $input = $this->input->post();
        if (count($input) > 0){
            if ($this->add()){
//                TODO tampilkan berhasil menambah user
            } else {
//                TODO tampilkan gagal menambah user
            }
        }
        $kategori = $this->kategori_model;
        $data['list_kategori'] = $kategori->getAll();
        $this->load->view('kategori', $data);
    }

    public function add()
    {
        $kategori = $this->kategori_model;
        $hasil = $kategori->add_kategori();
        return $hasil;
    }
}