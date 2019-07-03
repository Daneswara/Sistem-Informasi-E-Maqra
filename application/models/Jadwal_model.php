<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{
    private $_table = "jadwal";

    public $id;
    public $waktu_akhir_acak_nourut;
    public $waktu_akhir_acak_maqra;
    public $waktu_akhir_acak_tema;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getJadwal($id){
        return $this->db->get_where($this->_table, ['id' => $id])->row();
    }

    public function add_kategori()
    {
        $post = $this->input->post();
        $this->waktu_akhir_acak_nourut = $post['waktu_akhir_acak_nourut'];
        $this->waktu_akhir_acak_maqra = $post['waktu_akhir_acak_maqra'];
        $this->waktu_akhir_acak_tema = $post['waktu_akhir_acak_tema'];
        $simpan = $this->db->insert($this->_table,$this);
        if ($simpan){
            return true;
        } else {
            return false;
        }
    }
}