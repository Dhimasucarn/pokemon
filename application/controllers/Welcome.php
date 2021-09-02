<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['elemen'] = $this->db->query("SELECT DISTINCT `primary` FROM `pokemon`")->result();// data elemen elemen pokemon
		
		foreach ($data['elemen'] as $e) {
			$pokemons[$e->primary] = $this->db->query("SELECT * FROM `pokemon` where `primary` = '$e->primary' ")->result();//data pokemon yang elemennya xxx
			$data['primary'][$e->primary] = [];
			foreach ($pokemons[$e->primary] as $p) {
				array_push ($data['primary'][$e->primary], $p->name);	
			}
		}


		$this->load->view('template/header',$data);
		$this->load->view('welcome',$data);
		// $this->load->view('welcome2',$data);
		$this->load->view('template/footer',$data);
		
	}
	public function live_search(){


		foreach ($data['elemen'] as $e) {
			$pokemons[$e->primary] = $this->db->query("SELECT * FROM `pokemon` where `primary` = '$e->primary' ")->result();//data pokemon yang elemennya xxx
			$data['primary'][$e->primary] = [];
			foreach ($pokemons[$e->primary] as $p) {
				array_push ($data['primary'][$e->primary], $p->name);	
			}
		}
		$this->load->view('live_search',$data);

	}

	public function savePokemon(){
		if(count($_POST['yaha']) != 6){
			redirect('welcome');
		}
		else{
			redirect('pokemon');
		}
	}
}
