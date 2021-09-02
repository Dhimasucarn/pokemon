<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pokemon extends CI_Controller {

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
	public function __construct()
	{
		
		parent::__construct();
		
		$this->load->model("Pokemon_model");

		if(!$this->session->userdata('email')){
			redirect('Auth/auth_page');
		}
	
	}

	public function index()//home dashboard
	{
		
		$this->load->view('template/header');
		$this->load->view('template/footer_home');
		
	}

	public function getrecomendation()
	{
		$my_pokemon = $this->Pokemon_model->myPokemon();
		if(count($my_pokemon) == 6){
			redirect('pokemon/boss');
		}

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

	public function my_pokemon(){


		$my_pokemon = $this->Pokemon_model->myPokemon();
		
		$data['my_pokemon'] = $my_pokemon; 
		$data['boss'] = $this->db->query("SELECT * from boss")->result();
		$data['elemen'] = ['dark','ground','rock','fire','water','steel','ice','poison','electric','normal','fight','bug','ghost','grass','psychic','flying','dragon','dark','fairy'];
		// $data['my_pokemon'] = $_POST['yaha'];

		$this->load->view('template/header',$data);
		$this->load->view('my_pokemon',$data);
		$this->load->view('template/footer',$data);

	}


	public function change_pokemon(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id_user = $data['user']['id_user'];
		$my_pokemon = $this->db->get_where('my_pokemon', ['id_user' => $id_user])->result();

		for ($i=0; $i < count($my_pokemon) ; $i++) { 
			$this->db->where('id_user', $id_user);
			$this->db->delete('my_pokemon');	
		}
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
						</button>
						</div>');
		redirect('pokemon/getrecomendation');	
	}
	

	public function boss()
	{
		$my_pokemon = $this->Pokemon_model->myPokemon();
		if(!$my_pokemon){

			if(count($_POST['yaha']) < 6){
			$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Please Select 6 pokemon</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
						</button>
						</div>');
			redirect('pokemon/getrecomendation');
			}

			elseif(count($my_pokemon) < 6){
				foreach ($_POST['yaha'] as $nama_pokemon ) {
					$this->Pokemon_model->addPokemon($nama_pokemon);	# code...
				}
				redirect('pokemon/getrecomendation');
			}

			// if(count($my_pokemon) < 6){
			// 	redirect('pokemon');
			// }

		
		}else{
			$data['my_pokemon'] = $my_pokemon; 
			$data['boss'] = $this->db->query("SELECT * from boss")->result();
			$data['elemen'] = ['dark','ground','rock','fire','water','steel','ice','poison','electric','normal','fight','bug','ghost','grass','psychic','flying','dragon','dark','fairy'];
			// $data['my_pokemon'] = $_POST['yaha'];

			$this->load->view('template/header',$data);
			$this->load->view('index',$data);
			$this->load->view('template/footer',$data);
			
		}
	}

	public function recomendation($pokemon)
	{
		
		$data['boss'] = $this->db->query("SELECT * from boss where name = '$pokemon'")->result();

		$data['pokemon'] = $this->db->query("SELECT * from pokemon")->result();
		$this->load->view('template/header',$data);
		$this->load->view('recomendation',$data);	
		$this->load->view('template/footer',$data);
	}


	
}
