<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {


	//query outlet
	function outlet()
	{
		$this->db->select('*')
				 ->from('tb_setting_outlet');
		$query = $this->db->get();
		return $query;
	}

	function daftar($cek)
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = sha1($this->input->post('password'));

		$data = array(
			'username'		=> $nama,
			'email'			=> $email,
			'password'		=> $password,
		);
		$this->db->insert('tb_login',$data);
		
		
	}

	function cekPerusahaan()
	{
		$this->db->select('*')
				 ->from('tb_setting_perusahaan');
		$query = $this->db->get();
		return $query->num_rows();
	}

	function cekDirektur()
	{
		$this->db->select('*')
				 ->from('tb_setting_direktur');
		$query = $this->db->get();
		return $query->num_rows();
	}


}