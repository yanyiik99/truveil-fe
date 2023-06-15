<?php
/*----------------------------------------------------------
    Modul Name  : Modul Auth
    Desc        : Modul ini di gunakan untuk menampilkan landing page, Error 404
				  User Signup, Login, Reset Pass,  
    Sub fungsi  : 
        - page404    	: berfungsi Menampilkan Error 404
        
------------------------------------------------------------*/ 
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (isset($this->session->userdata['logged_status'])) {
			redirect("/");
		}
	}

	public function index()
	{

		// print_r($_SESSION);
		// die;

		$data	= array(
            'title'		 	=> NAMETITLE . ' - Homepage',
            'content'	 	=> 'auth/index',
			'extra'		    => 'auth/js/js_index'
		);

		$this->load->view('auth/tamplate/wrapper', $data);
	}

	public function login()
	{

		if ($this->session->userdata('user_id')) {
			redirect("admin/dashboard");
		}
		
		// $mdata = array(
		// 	'username' => "admin",
		// 	'password' => "123",
		// );

		// $url = URLAPI . '/api/auth/signin';
		// $result = baseapi($url, json_encode($mdata));

		// print_r(json_encode($result));
		// die;

		$data	= array(
            'title'		 	=> NAMETITLE . ' - Login',
            'content'	 	=> 'auth/login',
			'extra'		    => 'auth/js/js_index',
		);

		$this->load->view('auth/tamplate/wrapper', $data);
	}

	public function auth_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		$username = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));

		$mdata = array(
			'username' 		=> $username,
			'password' 		=> $password,
		);
		
		$url = URLAPI . '/api/auth/signin';
		$result = baseapi($url, json_encode($mdata));
		

		if(isset($result->accessToken)){
			$this->session->set_userdata($mdata);
			redirect("/");
		}else{
			$this->session->set_flashdata('failed', $result->message);
			redirect("/auth/login");
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

}
