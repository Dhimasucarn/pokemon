<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pokemon_model extends CI_Model {


	public function myPokemon(){
		$user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id_user = $user['id_user'];
		$query = $this->db->query("SELECT * from my_pokemon where id_user = $id_user ")->result();
		return $query;
	
	} 
	
	public function addPokemon($nama_pokemon){
		$query = $this->db->query("SELECT * from pokemon where name = '$nama_pokemon' ")->result();
		$user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id_user = $user['id_user'];
		foreach ($query as $q) {
			$data = [

			 			"id_user" 	=> $id_user,
			 			"name" => $q->name,
			 			"combat_power"=> $q->combat_power,
			 			"primary"=> $q->primary ,
			 			"Tier"=> $q->Tier,
			 			"Ground"=> $q->Ground,
			 			"Rock"=> $q->Rock,
			 			"Fire"=> $q->Fire,
			 			"water"=> $q->water,
			 			"steel"=> $q->steel,
			 			"ice"=> $q->ice,
			 			"poison"=> $q->poison,
			 			"electric"=> $q->electric,
			 			"normal"=> $q->normal,
			 			"fight"=> $q->fight,
			 			"bug"=> $q->bug,
			 			"ghost"=> $q->ghost,
			 			"grass"=> $q->grass,
			 			"psychic"=> $q->psychic,
			 			"flying"=> $q->flying,
			 			"dragon"=> $q->dragon,
			 			"dark"=> $q->dark,
			 			"fairy"=> $q->fairy
			 			
			 		];

		$this->db->insert('my_pokemon', $data);
		}
 		
	
	} 


}