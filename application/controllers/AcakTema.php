<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AcakTema extends CI_Controller
{
    public $access;
    public function __construct()
    {
        parent::__construct();
        $this->load->model("nomerurut_model");
        $this->load->model("jadwal_model");
        $this->load->model("peserta_model");
        $this->load->model("kategori_model");
        $this->load->model("users_model");
        $this->load->library('form_validation');
        $email = $this->session->userdata('email');
        $this->access = $this->session->userdata('access');
        if (!isset($email)) {
            redirect(base_url('index.php/User/login'));
        }
    }

    public function index()
    {
        
        $tb_jadwal = $this->jadwal_model;
        $jadwal = $tb_jadwal->getAll();
        $user = $this->users_model->getAll();
        // $data['jadwal'] = $jadwal;
        $peserta = $this->peserta_model;
        $semua_peserta = $peserta->getAll();
        $banyak_peserta = $peserta->getNumRow();
        $kategori = $this->kategori_model;
        $kategori_ = $kategori->getAll();
        $banyak_peserta_daerah = $this->peserta_model->getPesertaDaerah(0);
        // $dd = $banyak_peserta_daerah['banyak_kategori'];

        // print_r($dd);
        // print_r($kategori_);
        $this->load->view('acaktema', array(
            'jadwal' => $jadwal, 'peserta' => $semua_peserta, 'banyak' => $banyak_peserta,
            'kategori' => $kategori_,
            'peserta_perdaerah' => $banyak_peserta_daerah['banyak_peserta'],
            'peserta_perkategori' => $banyak_peserta_daerah['banyak_kategori'],
            'kategori_awal' => $banyak_peserta_daerah['kategori_awal'], 
            'peserta_daerah' => $banyak_peserta_daerah['peserta_daerah'],
            'user'=>$user
        ));
    }
    public function getPesertaDaerah($kategori){
        
        $nourut = $this->peserta_model;
        $hasil = $nourut->getPesertaDaerah($kategori);
        redirect(base_url()."index.php/NomerUrut");
        return $hasil;
    }
    public  function postTema()
    {
        $nourut = $this->nomerurut_model;
        $hasil = $nourut->postTema();
        return $hasil;
    }
    public  function updateTemaPeserta($id)
    {
        $nourut = $this->peserta_model;
        $hasil = $nourut->updateTemaPeserta($id);
        return $hasil;
    }
    public function adminTema()
    {
        $this->load->view('admin_tema');
    }
}