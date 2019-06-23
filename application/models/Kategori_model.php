<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    private $_table = "kategori";

    public $id;
    public $kategori;
    public $pakai_maqra;
    public $pakai_tema;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getKategori($id){
        return $this->db->get_where($this->_table, ['id' => $id])->row();
    }

    public function add_kategori()
    {
        $post = $this->input->post();
        $this->kategori = $post['kategori'];
        $this->pakai_maqra = $post['maqra'];
        $this->pakai_tema = $post['tema'];
        $simpan = $this->db->insert($this->_table,$this);
        if ($simpan){
            return true;
        } else {
            return false;
        }
    }
}