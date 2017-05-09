<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FicheRenseignement extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model', 'auth');
    }

    private function build($temp)
    {
        ob_start();
        $this->load->view('menuAdmin', $this->data);
        $this->load->view($temp, $this->data);
        //$this->load->view('footerView');
        $this->data['content'] = ob_get_clean();

        $this->load->view('layoutView', $this->data);
    }

    public function index()
    {
        if(isset($_SESSION['user_id'])) {
            if ($this->auth->is_admin($_SESSION['user_id']))
                $this->build('listeFichesRenseignementsView');
            else
                redirect('welcome');
        } else {
            redirect(base_url());
        }
    }

    public function index_fiche()
    {
        if(isset($_SESSION['user_id'])) {
            if ($this->auth->is_admin($_SESSION['user_id']))
                $this->build('ficheRenseignementsView');
            else
                redirect('welcome');
        } else {
            redirect(base_url());
        }
    }
}