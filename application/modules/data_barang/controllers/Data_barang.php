 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends MX_Controller {


	function __construct()
	{
		parent:: __construct();

		// load model
		$this->load->model('login/M_master_userid');
		$this->load->model('login/M_session');
		$this->load->model('M_data_barang');

		
	}

	public function list_data()
	{
		$data['list'] = $this->M_data_barang->tampil_data();
		$this->load->view('V_data_barang',$data);
	}

	function index()
	{
		// view
		$data = array(
			'namamodule' 	=> "data_barang",
			'namafileview' 	=> "V_data_barang",

			// variable
			
		);
		echo Modules::run('template/tampilAdmin', $data);
	}

	// simpan
	function simpanDatabarang()
	{
		$this->M_data_barang->insertDatabarang();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Simpan Berhasil !</strong><p>Data berhasil disimpan ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('data_barang');
	}

	// update
	function editDatabarang()
	{
		$this->M_data_barang->updateDatabarang();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Update Berhasil !</strong><p>Data berhasil diperbarui ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('data_barang');
	}

	// delete
	function hapusDatabarang( $id )
	{
		$this->M_data_barang->deleteDatabarang( $id );
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Hapus Berhasil !</strong><p>Data berhasil dihapus ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('data_barang');

	}

	// Search
	function cariDatabarang()
	{
		// post
		$text = $this->input->post('cari');
		// get data
		$getVal = $this->M_data_barang->searchDatabarang( $text );

		if ( $getVal->num_rows() > 0 )
		{

			$this->session->set_flashdata('msg', '<div class="alert alert-info"><strong>Pencarian ditemukan !</strong><p>'.$getVal->num_rows().' data magang berhasil ditemukan. | '.date('d F Y H:i:s A').'</p></div>');

			$data = array(
				'namamodule' 	 => "data_barang",
				'namafileview' 	 => "V_data_barang",

				// variable
				'tampilDataPrak' => $getVal
			);
			echo Modules::run('template/inventoriTemplate', $data);

		} else {

			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><strong>Maaf pencarian tidak ditemukan !</strong><p> Pencarian pada tanggal '.date('d F Y H:i:s A').'</p></div>');

			$data = array(
				'namamodule' 	 => "data_barang",
				'namafileview' 	 => "V_data_barang",

				// variable
				'tampilDataPrak' => $getVal
			);
			echo Modules::run('template/inventoriTemplate', $data);
		}
	}
}
