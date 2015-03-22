<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Welcome extends CI_Controller {

    function __Construct() {
        parent::__Construct();

        // load library
        // $this->load->library(array('table','validation'));
        // load helper
        //$this->load->helper('url');
        // load model
        $this->load->model('City_Model', 'city');
        $this->load->model('User_Model', 'user');
        $this->load->model('Contact_Model', 'contact');
        $this->load->model('Bip_Model', 'bip');
        $this->load->model('District_Model', 'district');
    }

    public $data = array('subview' => 'Sorry the request page is not yet avaliable',
        'Body message' => 'Welcome on SCOPE admin panel');

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->data['subview'] = 'content_view';
        $this->data['bodymessage'] = 'Form';
        $this->load->view('layout/adminLayout', $this->data);
    }

    public function login() {
        $this->data['subview'] = 'content_view';
        $this->data['bodymessage'] = 'Form';
        $this->load->view('layout/adminLayout', $this->data);
    }

    public function about() {
        $this->load->view('layout/adminLayout', $this->data);
    }

    public function map() {
        $this->data['subview'] = 'map_view';
        $this->data['bodymessage'] = 'Form';
        $this->load->view('layout/adminLayout', $this->data);
    }

    public function form() {
        $this->data['subview'] = 'form_view';
        $this->data['bodymessage'] = 'Form';
        $this->load->view('layout/adminLayout', $this->data);
        //
    }

    public function addUser() {
        $user = array('lastname' => $_POST['lastname'],
            'firstname' => $_POST['firstname'],
            'districtid' => '1',
            'mapposition' => $_POST['mapposition'],
            'password' => 'pass',
            'enabled' => '1');
        $this->user->create($user);
        redirect('welcome/form');
    }

    public function addCity() {
        $cities = array('code' => $_POST['code'],
            'wording' => $_POST['wording'],
            'mapposition' => $_POST['mapposition']);
        $this->city->create($cities);
        redirect('welcome/form');
    }

    public function adddistrict() {
        $districts = array('code' => $_POST['code'],
            'wording' => $_POST['wording'],
            'cityId' => $_POST[''],
            'mapposition' => $_POST['mapposition']);
        $this->district->create($districts);
        redirect('welcome/form');
    }

    public function addContact() {
        $contacts = array('userId' => $id,
            'number' => $_POST['number'],
            'type' => $_POST['type']);
        $this->contact->create($contacts);
        redirect('welcome/form');
    }

    public function saveBip() {
        $bips = array('contactid' => $id,
            'year' => $_POST['year'],
            'mounth' => $_POST['mounth'],
            'day' => $_POST['day'],
            'time' => $_POST['time']);

        $this->bip->create($bips);
        redirect('welcome');
    }

    public function chart() {
        $this->data['subview'] = 'chart_view';
        $this->data['bodymessage'] = 'chart';
        $this->load->view('layout/adminLayout', $this->data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */