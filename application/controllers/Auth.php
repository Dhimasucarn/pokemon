<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}


	public function index()
	{
		if($this->session->userdata('email')){
			redirect('Pokemon');
		}

		$this->form_validation->set_rules('email','Email', 'trim|valid_email');
		$this->form_validation->set_rules('password','Password', 'trim');
			
		$data['title'] = 'Dashboard Page';
		
		$this->load->view('auth/index',$data);
		
		
	}


	public function auth_page()
	{
		if($this->session->userdata('email')){
			redirect('Pokemon');
		}

		$this->form_validation->set_rules('email','Email', 'trim|valid_email');
		$this->form_validation->set_rules('password','Password', 'trim');
			
		if($this->form_validation->run() == false) {
			$data['title'] = 'Login Page';
			$this->load->view('template/header_auth',$data);
			$this->load->view('auth/login',$data);
			$this->load->view('template/footer',$data);
		
		}else{
			$this->_login();

		}
		
	}



	private function _login()
	{
		
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		// if user exist //
		if($user){
			//// if user active //////
			if($user['is_active'] == 1){
				// check password //
				$name = $user['name'];
				
				if (password_verify($password, $user['password'])){
					$data = [
						
						'id_user' => $user['id_user'],
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if($this->session->userdata('role_id') == 2){
						$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Welcome '.$name.' !</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
						</button>
						</div>');
						redirect('Pokemon');		
					}else {
						redirect('admin');	
					}

				}else{
					$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failed!</strong> Wrong password <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
						</button>
						</div>');
						redirect('auth/auth_page');
				}
				//////////////////////////////
			}else {
				$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failed!</strong> Email has not activated <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>');
					redirect('auth/auth_page');
			}
			///////////////////////////////////////
		} else {
			$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failed</strong> Email has not registered.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('auth/auth_page');
		}
		////////////////////////////////////////
	}

	public function register()
	{
		$this->load->view('template/header_auth');
		$this->load->view('auth/registration');
		$this->load->view('template/footer');
	}

	public function registration()
	{	

		if($this->session->userdata('email')){
			redirect('Pokemon');
		}

		$this->form_validation->set_rules('name','Name', 'trim');
		$this->form_validation->set_rules('email','Email', 'trim|valid_email|is_unique[user.email]',
			['is_unique' => 'This Email has already registered!'
			]);
		$this->form_validation->set_rules('pass1','Password', 'trim|min_length[3]|matches[pass2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
			]);

		$this->form_validation->set_rules('pass2','Repeat Password', 'trim|matches[pass1]');

		if($this->form_validation->run() == false) {
			$this->load->view('auth/registration');
		}else{
			$email = $this->input->post('email',true);
			$data = [
				// 'id_user' => rand(1,100).substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 3),
				'name' => htmlspecialchars($this->input->post('name',true)),
				'email'=> htmlspecialchars($email),
				'image'=> 'default.jpg',//default image
				'password'=> password_hash($this->input->post('pass1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()
			];

			// siapkan token
			// $token = base64_encode(random_bytes(32));
			// $user_token = [
			// 	'email' 		=> $email,
			// 	'token'			=> $token,
			// 	'date_created' 	=> time()

			// ];

			// memanggil fungsi untuk meminta verifikasi
			$this->db->insert('user', $data);
			// $this->db->insert('user_token', $user_token);

			// // jenis kirim email verify
			// $this->_sendEmail($token,'verify');


			$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Congratulation!</strong> Your account has been registered. Please login !<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('auth/auth_page');
		}
	}

	// private function _sendEmail($token,$type)
	// {
	// 	$this->load->library('email');
	// 	$email = $this->input->post('email',true);
 //        $config = array();
 //        $config['protocol'] = 'smtp';
 //        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
 //        $config['smtp_user'] = 'pesml892@gmail.com';
 //        $config['smtp_pass'] = 'PesMl123456782020';
 //        $config['smtp_port'] = 465;
 //        $config['mailtype'] = 'html';
 //        $config['charset'] = 'utf-8';

 //        $this->email->initialize($config);
	// 	$this->email->set_newline("\r\n");
 //        $this->email->from('pesml892@gmail.com', 'PES-ML OFFICIAL');
 //        $this->email->to($email);

 //        if($type == 'verify'){
	//     	$this->email->subject('Verification');
	// 		$this->email->message('Click this link to verify your account: <a href = "'. base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Active</a>');
 //        }elseif($type == 'forgot'){
 //        	$this->email->subject('Forgot');
	// 		$this->email->message('Click this link to reset your password: <a href = "'. base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset password</a>');
 //        }
		
	// 	if($this->email->send()){
	// 		return true;	
	// 	}
	// 	else {
	// 		echo $this->email->print_debugger();
	// 		die;

	// 	}


	// }

	// public function verify()
	// {
	// 	$email = $this->input->get('email');
	// 	$token = $this->input->get('token');

	// 	$user = $this->db->get_where('user',['email'=> $email])->row_array();

	// 	if($user){ //jika user sudah terdaftar
	// 		$user_token = $this->db->get_where('user_token',['token' => $token])->row_array();

	// 		if($user_token){ //jika user token sesuai

	// 			if(time() - $user_token['date_created'] < (60*60*24)){ //jika user token tidak expired
	// 				$this->db->set('is_active', 1);
	// 				$this->db->where('email', $email);
	// 				$this->db->update('user');

	// 				$this->db->delete('user_token', ['email' => $email]);
	// 				$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>'. $email .'</strong> Has been actived! Please Login! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	// 					redirect('auth');
	// 			} else { //jika user token tidak expired
	// 				$this->db->delete('user',['email' => $email])->row_array();
	// 				$this->db->delete('user_token',['email' => $email])->row_array();

	// 				$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Token expired! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	// 					redirect('auth');
	// 			}
	// 		} else { //jika user token tidak sesuai
	// 			$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Account activated failed! Wrong Token! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	// 				redirect('auth');
	// 		}

	// 	} else { //jika email tidak terdaftar
	// 		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Account activated failed! Wrong Email! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
	// 			</button></div>');
	// 			redirect('auth');
	// 	}
	// }

	// public function forgot_password()
	// {
	// 	$this->form_validation->set_rules('email','Email', 'trim|valid_email');
			
	// 	if($this->form_validation->run() == false) {
	// 		$data['title'] = 'Forgot Password';
	// 		$this->load->view('templates/auth_header',$data);
	// 		$this->load->view('auth/forgot-password');
	// 		$this->load->view('templates/auth_footer');
		
	// 	}else{
	// 		$email = $this->input->post('email');
	// 		$user = $this->db->get_where('user',['email' => $email, 'is_active' => 1])->row_array();

	// 		if($user)
	// 		{
	// 			$token = base64_encode(random_bytes(32));
	// 			$user_token = [
	// 				'email' => $email,
	// 				'token' => $token,
	// 				'date_created' => time()
	// 			];
	// 			$this->db->insert('user_token', $user_token);
	// 			$this->_sendEmail($token,'forgot');

	// 			$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success !!</strong> Please check your email to reset your password.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
	// 			</button>
	// 			</div>');
	// 			redirect('auth/forgot_password');
	// 		}else{
	// 			$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failed</strong> Email has not registered/actived.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
	// 			</button>
	// 			</div>');
	// 		redirect('auth/forgot_password');

	// 		}

	// 	}
		
	// }


	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>You have been logged out <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
			</button>
			</div>');
			redirect('auth');

	}
}
