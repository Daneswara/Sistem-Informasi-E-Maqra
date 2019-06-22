<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta_model extends CI_Model
{
    private $_table = "peserta";

    public $id;
    public $user_id;
    public $nama;
    public $kategori;
    public $urutan;
    public $maqra;
    public $tema;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function add_peserta()
    {
        $post = $this->input->post();
        $id_user = $this->session->userdata('id');
        $this->user_id = $id_user;
        $this->nama = $post['nama'];
        $this->kategori = $post['kategori'];
        $simpan = $this->db->insert($this->_table,$this);
        if ($simpan){
            return true;
        } else {
            return false;
        }
    }
}