<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller
{
    public $access;
    public function __construct()
    {
        parent::__construct();
        $this->load->model("peserta_model");
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
        $peserta = $this->peserta_model;
        $semua_peserta = $peserta->getAll();
        foreach ($semua_peserta as $p){
            $kategori = $this->getNamaKategori($p->kategori);
            $p->kategori = $kategori;
        }

        $data['list_peserta'] = $semua_peserta;
        $this->load->view('peserta', $data);
    }

    public function getNamaKategori($id){
        $kategori = $this->kategori_model;
        $k = $kategori->getKategori($id);
        return $k->kategori;
    }

    public function add()
    {
        $peserta = $this->peserta_model;
        $hasil = $peserta->add_peserta();
        return $hasil;
    }
    public function adminPeserta()
    {
        $this->load->view('peserta_admin');
    }
}