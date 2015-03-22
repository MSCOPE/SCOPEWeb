<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bip_model
 *
 * @author keam
 */
class Bip_Model extends CI_Model {

    private $table = 'bip';

    function __construct() {
        parent::__construct();
    }

    public function create($bip) {
        $this->db->insert($this->table, $bip);
    }

		public function liste(){
			$query = $this->db->get($this->table);
			return $query;
		}

    public function delete($bip) {
        $this->db->delete($this->table, $bip);
    }

}
