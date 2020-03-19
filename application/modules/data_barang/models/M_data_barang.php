 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_barang extends CI_Model {



	// get data akun
	function getAkun()
	{
		$this->db->select('*')
				 ->from('tb_akun')
				 ->order_by('nama_akun', 'DESC');
		$query = $this->db->get();
		return $query;
	}
	
		public function tampil_data()
	{
	    $sql = "SELECT * FROM mahasiswa";
		$tampil = $this->db->query($sql);
		return $tampil->result();
	}

 //  function getOutlet()
 //  {
 //    $this->db->select('*')
 //         ->from('tb_setting_outlet');
 //    $query = $this->db->get();
 //    return $query;
 //  }

 //  function joinOutlet()
 //  {
 //    $this->db->select('*')
 //             ->from('tb_akun')
 //             ->join('tb_setting_outlet', 'tb_akun.id_setting_outlet = tb_setting_outlet.id_setting_outlet');
 //  $query = $this->db->get();

 //    return $query;
 // }

	// insert
	function insertDatabarang()
	{
		$no_pendaftaran = $this->input->post('no_pendaftaran');
			$program_studi = $this->input->post('program_studi');
			$nama_siswa = $this->input->post('nama_siswa');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$agama = $this->input->post('agama');
			$alamat = $this->input->post('alamat');
			$no_telp = $this->input->post('no_telp');
			$email = $this->input->post('email');
			


		$data = array (
				'id' => $id,
				'no_pendaftaran' => $no_pendaftaran,
				'program_studi' => $program_studi,
				'nama_siswa' => $nama_siswa,
				'jenis_kelamin' => $jenis_kelamin,
				'agama' => $agama,
				'alamat' => $alamat,
				'no_telp' => $no_telp,
				'email' => $email

		);

		// query

		$this->db->insert('mahasiswa', $data);
	}

	// update
	function updateDataakun()
	{
		
$no_pendaftaran = $this->input->post('no_pendaftaran');
			$program_studi = $this->input->post('program_studi');
			$nama_siswa = $this->input->post('nama_siswa');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$agama = $this->input->post('agama');
			$alamat = $this->input->post('alamat');
			$no_telp = $this->input->post('no_telp');
			$email = $this->input->post('email');


		$data = array (
				'id' => $id,
				'no_pendaftaran' => $no_pendaftaran,
				'program_studi' => $program_studi,
				'nama_siswa' => $nama_siswa,
				'jenis_kelamin' => $jenis_kelamin,
				'agama' => $agama,
				'alamat' => $alamat,
				'no_telp' => $no_telp,
				'email' => $email

		);

		// query
		$this->db->where('id_akun', $id)->update('mahasiswa', $data);

	
	}

	function deleteDataakun( $id )
	{
		// query
		$this->db->where('id_akun', $id)->delete('mahasiswa');

	}

	function searchakun( $text )
	{
		$this->db->select('*')->from(akun)->like('nama_dudi', $text);
		$query = $this->db->get();

		return $query;
	}
}
