<?php
/*----------------------------------------------------------
    Modul Name  : Modul Auth
    Desc        : Modul ini di gunakan untuk menampilkan landing page, Error 404
				  User Signup, Login, Reset Pass,  
    Sub fungsi  : 
        - page404    	: berfungsi Menampilkan Error 404
        
------------------------------------------------------------*/ 
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
            'title'		 	=> NAMETITLE . ' - Dashboard',
            'content'	 	=> 'admin/dashboard/index',
			'a_dash'		=> 'active'
		);

		$this->load->view('admin/tamplate-admin/wrapper', $data);
	}


	public function list_villa()
	{

		// print_r($_SESSION);
		// die;

		$data	= array(
            'title'		 	=> NAMETITLE . ' - List Villa',
            'content'	 	=> 'admin/villa/index',
			'a_list'		=> 'active'
		);

		$this->load->view('admin/tamplate-admin/wrapper', $data);
	}


	public function add_villa()
	{

		// print_r($_SESSION);
		// die;

		$data	= array(
            'title'		 	=> NAMETITLE . ' - Add Villa',
            'content'	 	=> 'admin/villa/add-villa',
			'a_add'			=> 'active'
		);

		$this->load->view('admin/tamplate-admin/wrapper', $data);
	}




}
