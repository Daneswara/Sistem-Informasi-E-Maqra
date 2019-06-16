<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{
    private $_table = "identitas";

    public $id;
    public $id_users;
    public $daerah;
    public $updated_by;

    public function getIdentitas()
    {
        $id_user = $this->session->userdata('id');
        $hasil = $this->db->get_where($this->_table, ['id_user' => $id_user])->row();
        if ($hasil) {
            return $hasil;
        } else {
            return false;
        }
    }
}