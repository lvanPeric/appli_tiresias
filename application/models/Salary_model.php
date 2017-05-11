<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salary_model extends CI_Model
{
    /**
     * Salary_model constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $str
     * @return bool
     */
    public function department_check($str) : bool
    {
        return $this->check($str, 'numeroDepartement', 'departement');
    }

    /**
     * @param $str
     * @return bool
     */
    public function country_check($str) : bool
    {
        return $this->check($str, 'idPays', 'pays');
    }

    /**
     * @param $str
     * @param $col
     * @param $table
     * @return bool
     */
    private function check($str, $col, $table): bool
    {
        $this->db->where($col, $str);
        $query = $this->db->count_all_results($table);
        return $query == 0 ? false : true;
    }
}