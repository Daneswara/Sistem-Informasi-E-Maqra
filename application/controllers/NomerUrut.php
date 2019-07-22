<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NomerUrut extends CI_Controller
{
    public $access;
    public function __construct()
    {
        parent::__construct();
        $this->load->model("nomerurut_model");
        $this->load->model("jadwal_model");
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
        $data['jadwal'] = $jadwal;
        print_r($data['jadwal']);
        $this->load->view('nomerurut', $data);
        // $this->load->view('demo-particles');
    }
    public function adminNomor()
    {
        $this->load->view('nomor_urut_admin');
    }
    public function maqra()
    {
        $tb_jadwal = $this->jadwal_model;
        $jadwal = $tb_jadwal->getAll();
        $data['jadwal'] = $jadwal;
        print_r($jadwal);
        $this->load->view('acakmaqra', $data);
    }
    public function tema()
    {
        $tb_jadwal = $this->jadwal_model;
        $jadwal = $tb_jadwal->getAll();
        $data['jadwal'] = $jadwal;
        print_r($jadwal);
        $this->load->view('acaktema', $data);
    }
    public  function postNomor(){
        $nourut = $this->NomorUrut_model;
        $hasil = $nourut->postNoUrut();
        return $hasil;
    }
    public  function postMaqra(){
        $nourut = $this->NomorUrut_model;
        $hasil = $nourut->postMaqra();
        return $hasil;
    }
    public  function postTema(){
        $nourut = $this->NomorUrut_model;
        $hasil = $nourut->postTema();
        return $hasil;
    }
}