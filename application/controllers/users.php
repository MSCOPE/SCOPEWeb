  <?php
  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Users extends CI_Controller {

  	function __Construct()
  	{	
          parent::__Construct();
           
          // load library
         // $this->load->library(array('table','validation'));
           
          // load helper
          //$this->load->helper('url');
           
          // load model
          $this->load->model('User_Model','model');
      }

      function index(){
            $answer = $this->model->liste();

            
            $finale  = $answer->result();
            var_dump($finale);

 //         	 $user = array('lastname' => 'AMOUZOU',
//                            'firstname' => 'kevin',
 //                           'districtid' => '1' ,
 //                           'mapposition' => '' ,
  //                          'password' => 'Admin',
   //                         'enabled' => '1');
  //            $this->model->create($user);


               
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
