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

    private function build()
    {
        ob_start();
        //$this->load->view('menuView', $this->data);
        $this->load->view('connexionView', $this->data);
        //$this->load->view('footerView');
        $this->data['content'] = ob_get_clean();

        //$this->data['query'] = $this->home->getTest();

        $this->load->view('layoutView', $this->data);
    }

    public function index()
    {
        if(isset($_SESSION['user_id'])){
            if ($this->auth->is_admin($_SESSION['user_id']))
                redirect('admin-home');
            else
                redirect('welcome');
        } else {
            $this->build();
        }
    }

    public function login()
    {
        $data = array_filter([
            'loginSalarie' => $_POST['loginSalarie'] ?? null,
            'MdpSalarie' => $_POST['MdpSalarie'] ?? null
        ]);
        $this->form_validation->set_rules('loginSalarie', 'nom d\'utilisateur', 'required');
        $this->form_validation->set_rules('MdpSalarie', 'mot de passe', 'required');
        $this->form_validation->set_message('required', 'Le {field} est requis');

        if ($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
            if ($user = $this->auth->identify($data['loginSalarie'], $data['MdpSalarie'])) {
                $_SESSION['user_id'] = $user['id'];
                if($this->auth->is_admin($user['id'])){
                    redirect('admin-home');
                } else {
                    redirect('welcome');
                }
            } else {
                $this->data['error']="<p>Informations d'authentification incorrects</p>";
                $this->build();
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