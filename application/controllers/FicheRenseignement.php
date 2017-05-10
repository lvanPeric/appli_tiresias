<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FicheRenseignement extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model', 'auth');
        $this->load->model('salary_model', 'salary');
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
        if (isset($_SESSION['user_id'])) {
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
        $this->data['countries'] = $this->db->get('pays')->result();
        $this->data['departments'] = $this->db->get('departement')->result();
        $this->data['contrats'] = $this->db->get('type_de_contrat')->result();
        $this->data['fonctions'] = $this->db->get('fonction')->result();
        if (isset($_SESSION['user_id'])) {
            if ($this->auth->is_admin($_SESSION['user_id']))
                $this->build('ficheRenseignementsView');
            else
                redirect('welcome');
        } else {
            redirect(base_url());
        }
    }

    public function insert_fiche()
    {
        if (isset($_SESSION['user_id'])) {
            if ($this->auth->is_admin($_SESSION['user_id'])) {
                $data = array_filter([
                    'name' => $_POST['name'] ?? null,
                    'city' => $_POST['city'] ?? null,
                    'postal_code' => $_POST['postal_code'] ?? null,
                    'latitude' => $_POST['latitude'] ?? null,
                    'longitude' => $_POST['longitude'] ?? null,
                    'address' => $_POST['address'] ?? null,
                    'description' => $_POST['description'] ?? null
                ]);
            }
        }
        redirect('welcome');
    }
}