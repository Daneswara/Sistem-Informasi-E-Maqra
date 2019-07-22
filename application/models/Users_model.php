<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{
    private $_table = "users";

    public $id;
    public $email;
    public $password;
    public $updated_by;
    public $nama;
    public $nohp;
    public $surat;
    public $daerah;
    public $access;

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
    public function getUser()
    {
        return $this->db->get_where($this->_table, ['access' => 'user'])->result();
    }
    public function getAdmin()
    {
        return $this->db->get_where($this->_table, ['access' => 'admin'])->result();
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
            $this->session->set_userdata('nama', $hasil->nama);
            $this->session->set_userdata('access', $hasil->access);
            return true;
        } else {
            return false;
        }
    }

    public function getProfile()
    {
        $id_user = $this->session->userdata('id');
        $hasil = $this->db->get_where($this->_table, ['id' => $id_user])->row();
        if ($hasil) {
            return $hasil;
        } else {
            return false;
        }
    }

    public function add_user()
    {
        $id_user = $this->session->userdata('id');
        $post = $this->input->post();
        $this->nama = $post['nama'];
        $this->email = $post['email'];
        $this->password = md5($post['password']);
        $this->nohp = $post['nohp'];
        $this->daerah = $post['daerah'];
        $this->updated_by = $id_user;
        $this->access = 'user';

        $config['upload_path'] = './surat/';
        $config['allowed_types'] = 'gif|jpeg|jpg|png';

        $this->load->library('upload', $config);
        $upload = $this->upload->do_upload('surat');
        if (!$upload) {
            return false;
        } else {
            $upload_data = $this->upload->data();
            $this->surat = $upload_data['file_name'];
            $this->db->insert($this->_table,$this);
            return true;
        }
    }

    public function add_user_admin()
    {
        $id_user = $this->session->userdata('id');
        $post = $this->input->post();
        $this->nama = $post['nama'];
        $this->email = $post['email'];
        $this->password = md5($post['password']);
        $this->updated_by = $id_user;
        $this->access = 'admin';
        $this->db->insert($this->_table,$this);
        return true;
    }
}