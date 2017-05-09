<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function login(string $identity, string  $password = null): stdClass
    {
        $query = $this->db->get_where('salarie', ['loginSalarie' => $identity], 1);
        return $query->result()[0];
    }

    public function getSalarie(int $id) :array
    {
        $this->db->select('*');
        $this->db->from('salarie');
        $this->db->where(['idSalarie' => $id]);
        $query = $this->db->get();
        return $query->result();
    }

    public function identify(string $identity, string $password)
    {
        $this->db->select('idSalarie, etreAdministrateurSalarie, MdpSalarie');
        $this->db->from('salarie');
        $this->db->where(['loginSalarie' => $identity]);
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        {
            if ($this->bcrypt->check_password($password, $query->result()[0]->MdpSalarie))
            {
                return ["id" => $query->result()[0]->idSalarie, "admin" => $query->result()[0]->etreAdministrateurSalarie];
            }
            else
            {
                return false;
            }
        }
        return false;
    }

    public function is_admin(string $id): bool
    {
        $this->db->select('etreAdministrateurSalarie');
        $this->db->from('salarie');
        $this->db->where(['idSalarie' => $id]);
        $query = $this->db->get();
        if ($query->result()[0]->etreAdministrateurSalarie == '1')
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}