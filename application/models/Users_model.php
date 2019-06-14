<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{
    private $_table = "users";

    public $id;
    public $email;
    public $password;
    public $updated_by;

    public function rules()
    {
        return [
            ['field' => 'email',
                'label' => 'Email',
                'rules' => 'required'],
            ['field' => 'password',
                'label' => 'Password',
                'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function cekUserLogin()
    {
        $post = $this->input->post();
        $this->email = $post['email'];
        $this->password = md5($post['password']);
        $hasil = $this->db->get_where($this->_table, ['email' => $this->email, 'password' => $this->password])->row();
        if ($hasil) {
            $this->session->set_userdata('id', $hasil->id);
            $this->session->set_userdata('email', $this->email);
            $this->session->set_userdata('access', $hasil->access);
            return true;
        } else {
            return false;
        }
    }
}