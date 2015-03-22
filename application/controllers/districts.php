  <?php
  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Districts extends CI_Controller {

  	   function __Construct()
    	 {	
          parent::__Construct();
           
          // load library
         // $this->load->library(array('table','validation'));
           
          // load helper
          //$this->load->helper('url');
           
          // load model
          $this->load->model('District_Model','model');
      }

      function index(){
          // set common properties
        //  $data['title'] = 'Add new person';
          //$data['action'] = site_url('person/addPerson');
          //$data['link_back'] = anchor('person/index/','Back to list of persons',array('class'=>'back'));
            
          // set validation properties
          //$this->_set_fields();
          //$this->_set_rules();
           
          // run validation
         // if ($this->validation->run() == FALSE){
          //    $data['message'] = '';
        //  }else{
              // save data
             // $city = array('code' => $this->input->post('code'),
             //                 'wording' => $this->input->post('wording'),
             //                 'mapposition' => $this->input->post('mapposition'));
                              //'' => date('Y-m-d', strtotime($this->input->post('dob'))));
          	 $district = array('code' => '001KLI',
                            'wording' => 'klikamé',
                            'mapposition' => '' ,
                            'cityId' => '1' );
              $this->model->create($district);
               
              // set form input name="id"
              //$this->validation->id = $id;
               
              // set user message
             // $data['message'] = '<div class="success">add new person success</div>';
         // }
           
          // load view
          //$this->load->view('personEdit', $data);
      	}
  	}
?>
