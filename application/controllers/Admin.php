<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model', 'auth');
    }
    private function build()
    {
        ob_start();
        $this->load->view('menuAdmin', $this->data);
        $this->load->view('homeAdminView', $this->data);
        //$this->load->view('footerView');
        $this->data['content'] = ob_get_clean();

        //$this->data['query'] = $this->home->getTest();

        $this->load->view('layoutView', $this->data);
    }
    public function index()
    {
        if(isset($_SESSION['user_id'])) {
            if ($this->auth->is_admin($_SESSION['user_id']))
                $this->build();
            else
                redirect('welcome');
        } else {
            redirect(base_url());
        }
    }
}