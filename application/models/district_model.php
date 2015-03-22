<?php 
	/**
	* 
	*/
	class District_Model extends CI_Model
	{
		private $table = 'districts';

		function __construct()
		{
			parent::__construct();
		}

		public function create($district){
			$this->db->insert($this->table,$district);
		}

		public function liste(){
			$query = $this->db->get($this->table);
			return $query;
		}

		public function delete($district){
			$this->db->delete($this->table,$district); 
		}
		
	}
 ?>

 