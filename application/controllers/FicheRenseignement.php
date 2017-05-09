<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FicheRenseignement extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model', 'auth');
    }
}