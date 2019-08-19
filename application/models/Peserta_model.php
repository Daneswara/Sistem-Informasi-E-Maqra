<?php defined('BASEPATH') or exit('No direct script access allowed');

class Peserta_model extends CI_Model
{
    private $_table = "peserta";

    // public $id;
    public $user_id;
    public $nama;
    public $kategori;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getNumRow()
    {
        $query = $this->db->query('Select * from peserta');
        return $query->num_rows();
    }

    public function add_peserta()
    {
        $post = $this->input->post();
        $id_user = $this->session->userdata('id');
        $this->user_id = $id_user;
        $this->nama = $post['nama'];
        $this->kategori = $post['kategori'];
        $simpan = $this->db->insert($this->_table, $this);
        if ($simpan) {
            return true;
        } else {
            return false;
        }
    }
    public function updateNoUrutPeserta($id)
    {
        $urutan =0;
         $post = $this->input->post();
        $this->user_id = $post['user_id'];
        $this->nama = $post['nama'];
        $this->kategori = $post['kategori'];
        $this->urutan = $post['urutan'];
        // $this->maqra = $post['maqra'];
        // $this->tema = $post['tema'];
        $simpan = $this->db->update($this->_table,  $this, array('id' => $id));
        if ($simpan) {
            return true;
        } else {
            return false;
        }
    }
    public function updateMaqraPeserta($id)
    {
        
        $maqra = 0;
        $post = $this->input->post();
        $this->user_id = $post['user_id'];
        $this->nama = $post['nama'];
        $this->kategori = $post['kategori'];
        // $this->urutan = $post['urutan'];
        $this->maqra = $post['maqra'];
        // $this->tema = $post['tema'];
        $simpan = $this->db->update($this->_table,  $this, array('id' => $id));
        if ($simpan) {
            return true;
        } else {
            return false;
        }
    }
    public function updateTemaPeserta($id)
    {
        
        $tema=0;
        $post = $this->input->post();
        $this->user_id = $post['user_id'];
        $this->nama = $post['nama'];
        $this->kategori = $post['kategori'];
        // $this->urutan = $post['urutan'];
        // $this->maqra = $post['maqra'];
        $this->tema = $post['tema'];
        $simpan = $this->db->update($this->_table,  $this, array('id' => $id));
        if ($simpan) {
            return true;
        } else {
            return false;
        }
    }
    // public $kategori1 = 0;
    public function getPesertaDaerah($kategori1)
    {
        // print_r('sebelemu>>>>>>');
        // print_r($kategori1);
        $id = $this->session->userdata('id');
        $query = $this->db->query("select * from peserta where user_id= '+$id+' ");
        
        $i = 0;
        foreach ($query->result() as $row) {
            $ff[$i] = $row->kategori;
            $i++;
        }
        if ($kategori1 == 0 || $kategori1 == null) {
            $query2 = $this->db->query("select * from peserta where kategori= $ff[0]");
        } else {
            // print_r('didalam>>>>>>');
            // print_r($kategori1);
            $query2 = $this->db->query("select * from peserta where kategori= $ff[$kategori1]");
        }
        // $query2 = $this->db->query("select * from peserta where kategori= 2 ");
        return array(
            'peserta_daerah' => $query->result(), 'banyak_peserta' => $query->num_rows(),
            'banyak_kategori' => $query2->num_rows(), 'kategori_awal'=>$ff[$kategori1] 
        );
    }
    public function getKategoriPesertaDaerah()
    {
        $id = $this->session->userdata('id');
        $query = $this->db->query("select * from peserta where user_id= '+$id+' ");
        $i = 0;
        foreach ($query->result() as $row) {

            $ff[$i] = $row->kategori;
            $i++;
        }
        $query2 = $this->db->query("select * from peserta where kategori= '+$ff[0]+' ");
        return $query2->result();
    }
}
