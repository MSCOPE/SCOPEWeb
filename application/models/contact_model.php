<?php 
	class Contact_model extends CI_Model
	{
		private $table = 'contacts';

		function __construct()
		{
			parent::__construct();
		}

		public function create($contact){
			$this->db->insert($this->table,$contact);
		}

		public function liste(){
			$query = $this->db->get($this->table);
			return $query;
		}

		public function delete($contact){
			$this->db->delete($this->table,$contact); 
		}
		
	}
 ?>
