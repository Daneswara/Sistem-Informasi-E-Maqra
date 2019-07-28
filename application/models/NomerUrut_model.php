<?php defined('BASEPATH') or exit('No direct script access allowed');

class NomerUrut_model extends CI_Model
{
    private $_table = "nomer_urut";
    private $_table_maqra = "acak_maqra";
    private $_table_tema = "acek_tema";

    public $id;
    public $user_id;
    public $hasil;
    public $tgl_acak;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function postNoUrut()
    {
        $post = $this->input->post();
        $this->nama = $post['id'];
        $this->email = $post['user_id'];
        $this->hasil = $post['hasil'];
        $this->tgl_acak = $post['tgl_acak'];
        $simpan = $this->db->insert($this->_table, $this);
        if ($simpan) {
            return true;
        } else {
            return false;
        }
    }
    public function updateNoUrutPeserta()
    {
        $post = $this->input->update();
        $this->nama = $post['id'];
        $this->email = $post['user_id'];
        $this->hasil = $post['hasil'];
        $this->tgl_acak = $post['tgl_acak'];
        $simpan = $this->db->insert($this->_table, $this);
        if ($simpan) {
            return true;
        } else {
            return false;
        }
    }
    public function postMaqra()
    {
        $post = $this->input->post();
        $this->nama = $post['id'];
        $this->email = $post['user_id'];
        $this->hasil = $post['hasil'];
        $this->tgl_acak = $post['tgl_acak'];
        $simpan = $this->db->insert($this->_table_maqra, $this);
        if ($simpan) {
            return true;
        } else {
            return false;
        }
    }
    public function updateMaqraPeserta()
    {
        $post = $this->input->update();
        $this->nama = $post['id'];
        $this->email = $post['user_id'];
        $this->hasil = $post['hasil'];
        $this->tgl_acak = $post['tgl_acak'];
        $simpan = $this->db->insert($this->_table_maqra, $this);
        if ($simpan) {
            return true;
        } else {
            return false;
        }
    }
    public function postTema()
    {
        $post = $this->input->post();
        $this->nama = $post['id'];
        $this->email = $post['user_id'];
        $this->hasil = $post['hasil'];
        $this->tgl_acak = $post['tgl_acak'];
        $simpan = $this->db->insert($this->_table_tema, $this);
        if ($simpan) {
            return true;
        } else {
            return false;
        }
    }
    public function updateTemaPeserta()
    {
        $post = $this->input->update();
        $this->nama = $post['id'];
        $this->email = $post['user_id'];
        $this->hasil = $post['hasil'];
        $this->tgl_acak = $post['tgl_acak'];
        $simpan = $this->db->insert($this->_table_tema, $this);
        if ($simpan) {
            return true;
        } else {
            return false;
        }
    }

}
