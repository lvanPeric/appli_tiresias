<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salary_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function department_check($str)
    {
        $this->db->where('numeroDepartement', $str);
        $query = $this->db->count_all_results('departement');
        return $query == 0 ? false : true;
    }
}