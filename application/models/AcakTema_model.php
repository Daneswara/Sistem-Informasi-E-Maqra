<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AcakTema_model extends CI_Model
{
    private $_table = "acak_tema";

    public $id;
    public $user_id;
    public $hasil;
    public $tgl_acak;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}