<?php
	/**
	* 
	*/
	class City_Model extends CI_Model
	{
		private $table = 'cities';

		function __construct()
		{
			parent::__construct();
		}

		public function create($city){
			$this->db->insert($this->table,$city);
		}

		public function liste(){
			$query = $this->db->get($this->table);
			return $query;
		}

		public function delete($city){
			$this->db->delete($this->table,$city); 
		}
		
	}
?>