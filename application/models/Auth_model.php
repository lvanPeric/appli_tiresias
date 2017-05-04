<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function login(string $identity): stdClass
    {
        $query = $this->db->get_where('salarie', ['loginSalarie' => $identity], 1);
        return $query->result()[0];
    }

    public function is_identify(string $identity): bool
    {
        $this->db->select('id');
        $this->db->from('salarie');
        $this->db->where(['loginSalarie' => $identity]);
        $num_results = $this->db->count_all_results();
        if ($num_results === 1)
        {
            return true;
        }
        return false;
    }
}