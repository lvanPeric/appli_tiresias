<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model', 'auth');
    }

    public function index()
    {
        //$this->load->database();
        //$this->load->model('home_model', 'home');
        ob_start();
        //$this->load->view('menuView', $this->data);
        $this->load->view('connexionView', $this->data);
        //$this->load->view('footerView');
        $this->data['content'] = ob_get_clean();

        //$this->data['query'] = $this->home->getTest();

        $this->load->view('layoutView', $this->data);
    }

    public function login()
    {
        $error_pre = "Veuillez remplir le champs: ";
        $errors = [];
        $result = [];
        $data = array_filter([
            'loginSalarie' => $_POST['loginSalarie'] ?? null,
            'MdpSalarie' => $_POST['MdpSalarie'] ?? null
        ]);
        if ($this->auth->is_identify($data['loginSalarie'])) {

        } else {
            redirect('/');
        }
    }
}