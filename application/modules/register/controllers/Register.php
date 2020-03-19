<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_register');
		  $this->load->model('login/M_session');


	}

	// index
	function index()
	{
		$data = array(
					'salah'			=> "",
					// 'status' 		=> $status,
					// 'outlet'		=> $this->m_register->outlet(),
					
			);
		$this->load->view('V_register',$data);
	}

	function tampilanDaftar($status)
	{
		$this->M_session->store_id($status);
		  $data = array(
					'salah'			=> "",
					'status' 		=> $status,
					'outlet'		=> $this->m_register->outlet(),
					
			);
		$this->load->view('V_register',$data);
	}

	function daftar()
	{
		$password 			= $this->input->post('password');
		$konf_password 		= $this->input->post('konfirmasi_password');

		if ($password == $konf_password)
		{
			$this->m_register->daftar($cek);
			redirect('login');
		}
		else
		{
			$data = array(
					'status'=> $status,
					'salah'	=> "Password anda tidak sesuai !"
			);
			$this->load->view('V_register',$data);
		}
	}


}
