<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FicheRenseignement extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model', 'auth');
        $this->load->model('salary_model', 'salary');

        $this->load->helper('security');
        $this->load->helper('form');
        $this->load->library('form_validation');
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
                    'dateDebutContrat' => $_POST['dateDebutContrat'],
                    'dateFinReelleContrat' => $_POST['dateFinReelleContrat'] ?? null,
                    'nomSalarie' => $_POST['nomSalarie'] ?? null,
                    'prenomSalarie' => $_POST['prenomSalarie'] ?? null,
                    'nomJeuneFilleSalarie' => $_POST['nomJeuneFilleSalarie'] ?? null,
                    'dateNaissanceSalarie' => $_POST['dateNaissanceSalarie'] ?? null,
                    'lieuNaissanceSalarie' => $_POST['lieuNaissanceSalarie'] ?? null,
                    'numeroDepartement' => $_POST['numeroDepartement'] ?? null,
                    'idPays' => $_POST['idPays'] ?? null,
                    'situationFamilialeSalarie' => $_POST['situationFamilialeSalarie'] ?? null,
                    'nbEnfantSalarie' => $_POST['nbEnfantSalarie'] ?? null,
                    'numSecSocSalarie' => $_POST['numSecSocSalarie'] ?? null,
                    'nationaliteSalarie' => $_POST['nationaliteSalarie'] ?? null,
                    'niveauEtudeSalarie' => $_POST['niveauEtudeSalarie'] ?? null,
                    'idTypeContrat' => $_POST['idTypeContrat'] ?? null,
                    'nbHeuresHebdoContrat' => $_POST['nbHeuresHebdoContrat'] ?? null,
                    'nomFonction' => $_POST['nomFonction'] ?? null,
                    'niveauFonction' => $_POST['niveauFonction'] ?? null,
                    'echelonFonction' => $_POST['echelonFonction'] ?? null,
                    'Adresse1Salarie' => $_POST['Adresse1Salarie'] ?? null,
                    'Adresse2Salarie' => $_POST['Adresse2Salarie'] ?? null,
                    'codePostalSalarie' => $_POST['codePostalSalarie'] ?? null,
                    'villeSalarie' => $_POST['villeSalarie'] ?? null,
                    'fixeSalarie' => $_POST['fixeSalarie'] ?? null,
                    'portableSalarie' => $_POST['portableSalarie'] ?? null,
                    'emailSalarie' => $_POST['emailSalarie'] ?? null,
                ]);
                $config = [
                    [
                        'field' => 'dateDebutContrat',
                        'label' => 'date de l\'entrée',
                        'rules' => 'trim|required|valid_date|xss_clean',
                        'errors' => [
                            'required' => 'La %s est requise.',
                        ]
                    ], [
                        'field' => 'dateFinReelleContrat',
                        'label' => 'date de sortie',
                        'rules' => 'trim|required|valid_date|xss_clean',
                        'errors' => [
                            'required' => 'La %s est requise.',
                        ]
                    ], [
                        'field' => 'nomSalarie',
                        'label' => 'nom',
                        'rules' => 'trim|required|xss_clean'
                    ], [
                        'field' => 'prenomSalarie',
                        'label' => 'prénom',
                        'rules' => 'trim|required|xss_clean'
                    ], [
                        'field' => 'dateNaissanceSalarie',
                        'label' => 'date de naissance',
                        'rules' => 'trim|required|valid_date|xss_clean',
                        'errors' => [
                            'required' => 'La %s est requise.',
                        ]
                    ], [
                        'field' => 'lieuNaissanceSalarie',
                        'label' => 'lieu de naissance',
                        'rules' => 'trim|required|valid_date|xss_clean'
                    ], [
                        'field' => 'numeroDepartement',
                        'label' => 'numéro du département',
                        'rules' => [
                            'trim',
                            'required',
                            ['valid_department', [$this->salary, 'department_check']],
                            'xss_clean'
                        ],
                        'errors' => [
                            'valid_department' => 'Le %s n\'est pas correct.',
                        ]
                    ]
                ];
                $this->form_validation->set_message('required', 'Le {field} est requis');
                $this->form_validation->set_message('valid_date', 'La {field} est mauvaise');
                $this->form_validation->set_rules($config);


                if ($this->form_validation->run() == FALSE) {
                    $this->index_fiche();
                } else {
                    var_dump($data);
                }
            } else {
                redirect('welcome');
            }
        } else {
            redirect('welcome');
        }
    }
}