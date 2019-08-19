<?php defined('BASEPATH') or exit('No direct script access allowed');

class NomerUrut_model extends CI_Model
{
    private $_table = "nomer_urut";
    private $_table_peserta = "peserta";
    private $_table_maqra = "acak_maqra";
    private $_table_tema = "acek_tema";

    public $id;
    public $user_id;
    public $hasil;
    public $tgl_acak;
    public $kategori;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function postNoUrut()
    {
        $post = $this->input->post();
        $this->user_id = $post['user_id'];
        $this->hasil = $post['hasil'];
        $this->tgl_acak = $post['tgl_acak'];
        $this->kategori = $post['kategori'];
        $simpan = $this->db->insert($this->_table, $this);
        if ($simpan) {
            return true;
        } else {
            return false;
        }
      
    }
    // public function updateNoUrutPeserta($id)
    // {
    //     print_r('Model>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<<<<<<<');
    //      $post = $this->input->post();
    //      print_r('cek>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<<<<<<<');
    //      print_r($post['user_id']);
    //     // $this->db->where('id', $id);
    //     // $post = $this->input->update();
    //     // $this->nama = $post['id'];
    //     $this->user_id = $post['user_id'];
    //     $this->nama = $post['nama'];
    //     $this->kategori = $post['kategori'];
    //     $this->urutan = $post['urutan'];
    //     // $this->maqra = $post['maqra'];
    //     // $this->tema = $post['tema'];
    //     $simpan = $this->db->update($this->_table_peserta,  $this, array('id' => $id));
    //     print_r('PESERTA>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<<<<<<<sudahupdate');
    //     // $simpan = $this->db->insert($this->_table, $this);
    //     if ($simpan) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    public function postMaqra()
    {
        $post = $this->input->post();
        $this->user_id = $post['user_id'];
        $this->hasil = $post['hasil'];
        $this->tgl_acak = $post['tgl_acak'];
        $this->kategori = $post['kategori'];
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
        $this->user_id = $post['user_id'];
        $this->hasil = $post['hasil'];
        $this->tgl_acak = $post['tgl_acak'];
        $this->kategori = $post['kategori'];
        $simpan = $this->db->insert($this->_table_tema, $this);
        if ($simpan) {
            return true;
        } else {
            return false;
        }
    }
}
