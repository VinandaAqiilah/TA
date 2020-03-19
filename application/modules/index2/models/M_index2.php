 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_index2 extends CI_Model {



	// get data akun
	function getAkun()
	{
		$this->db->select('*')
				 ->from('tb_akun')
				 ->order_by('nama_akun', 'DESC');
		$query = $this->db->get();
		return $query;
	}

  function getOutlet()
  {
    $this->db->select('*')
         ->from('tb_setting_outlet');
    $query = $this->db->get();
    return $query;
  }

  function joinOutlet()
  {
    $this->db->select('*')
             ->from('tb_akun')
             ->join('tb_setting_outlet', 'tb_akun.id_setting_outlet = tb_setting_outlet.id_setting_outlet');
  $query = $this->db->get();

    return $query;
 }

	// insert
	function insertDataakun()
	{
		$nama_akun 	= $this->input->post('nama_akun');
    $id_setting_outlet 	= $this->input->post('id_setting_outlet');
		$saldo  = $this->input->post('saldo');
		$rekening  = $this->input->post('rekening');
		$telepon_bank  = $this->input->post('telepon_bank');
		$alamat_bank  = $this->input->post('alamat_bank');
		$nama_bank  = $this->input->post('nama_bank');
		$status  = $this->input->post('status');


		$data = array (
			'nama_akun'	=>$nama_akun,
      'id_setting_outlet' =>$id_setting_outlet,
			'saldo'	=>$saldo,
			'rekening' =>$rekening,
			'telepon_bank'	=>$telepon_bank,
			'alamat_bank'	=>$alamat_bank,
			'nama_bank'	=>$nama_bank,
			'status'	=>$status,

		);

		// query

		$this->db->insert('tb_akun', $data);
	}

	// update
	function updateDataakun()
	{
		$id 	= $this->input->post('id');
		$nama_akun 	= $this->input->post('nama_akun');
		$id_setting_outlet 	= $this->input->post('id_setting_outlet');
		$saldo  = $this->input->post('saldo');
		$rekening  = $this->input->post('rekening');
		$telepon_bank  = $this->input->post('telepon_bank');
		$alamat_bank  = $this->input->post('alamat_bank');
		$nama_bank  = $this->input->post('nama_bank');
		$status  = $this->input->post('status');



		$data = array (
			'nama_akun'	=>$nama_akun,
      'id_setting_outlet' =>$id_setting_outlet,
			'saldo'	=>$saldo,
			'rekening' =>$rekening,
			'telepon_bank'	=>$telepon_bank,
			'alamat_bank'	=>$alamat_bank,
			'nama_bank'	=>$nama_bank,
			'status'	=>$status,

		);

		// query
		$this->db->where('id_akun', $id)->update('tb_akun', $data);

		//echo "aaaaaaaaaaaaa".$kuotah[0];
	}

	function deleteDataakun( $id )
	{
		// query
		$this->db->where('id_akun', $id)->delete('tb_akun');

	}

	function searchakun( $text )
	{
		$this->db->select('*')->from(akun)->like('nama_dudi', $text);
		$query = $this->db->get();

		return $query;
	}
}
