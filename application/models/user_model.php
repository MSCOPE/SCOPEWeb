<?php 
	class User_model extends CI_Model
	{
		private $table = 'users';

		function __construct()
		{
			parent::__construct();
		}

		public function create($user){
			$this->db->insert($this->table,$user);
		}

		public function liste(){
			$query = $this->db->get('users');
			return $query;
		}

		public function delete($user){
			$this->db->delete($this->table,$user); 
		}
		
	}
 ?>
