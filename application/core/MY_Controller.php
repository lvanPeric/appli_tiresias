<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public $css;
    public $js;
    public $favicon;
    public $title;

    protected $data;

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('text');
        $this->load->library('session');
        $this->load->library('bcrypt');

        $this->favicon = base_url() . "images/favicon.ico";

        $this->title = "Tirésias";

        $this->css = [
            'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css',
            base_url() . 'src/css/index.css'
        ];
        $this->js = [
            'https://code.jquery.com/jquery-3.1.1.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js',
            'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'
        ];

        $this->data['js'] = $this->js;
        $this->data['css'] = $this->css;
        $this->data['favicon'] = $this->favicon;
        $this->data['title'] = $this->title;
    }
}