<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model', 'auth');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    private function build($data)
    {
        ob_start();
        //$this->load->view('menuView', $this->data);
        $this->load->view('connexionView', $data);
        //$this->load->view('footerView');
        $data['content'] = ob_get_clean();

        //$this->data['query'] = $this->home->getTest();

        $this->load->view('layoutView', $data);
    }

    public function index()
    {
        $this->build($this->data);
    }

    public function login()
    {
        $data = array_filter([
            'loginSalarie' => $_POST['loginSalarie'] ?? null,
            'MdpSalarie' => $_POST['MdpSalarie'] ?? null
        ]);
        $this->form_validation->set_rules('loginSalarie', 'Nom d\'utilisateur', 'required');
        $this->form_validation->set_rules('MdpSalarie', 'Mot de passe', 'required');
        $this->form_validation->set_message('required', 'Le {field} est requis');

        if ($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
            if ($this->auth->is_identify($data['loginSalarie'], $data['MdpSalarie'])) {
                redirect('welcome');
            } else {
                redirect();
            }
        }
    }

    public function hash()
    {
        $password = 'claude';
        $hash = $this->bcrypt->hash_password($password);
        var_dump($hash);
    }
}