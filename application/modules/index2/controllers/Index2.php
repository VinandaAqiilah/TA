 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index2 extends MX_Controller {


	function __construct()
	{
		parent:: __construct();

		// load model
		$this->load->model('login/M_master_userid');
		$this->load->model('login/M_session');
		$this->load->model('M_index2');

		
	}
	

	function index()
	{
		// view
		$data = array(
			'namamodule' 	=> "index2",
			'namafileview' 	=> "v_index2",

			// variable
			
		);
		echo Modules::run('template/tampilAdmin', $data);
	}

	// simpan
	function simpanDataindex2()
	{
		$this->M_index2->insertDataindex2();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Simpan Berhasil !</strong><p>Data berhasil disimpan ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('index2');
	}

	// update
	function editDataindex2()
	{
		$this->M_index2->updateDataindex2();
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Update Berhasil !</strong><p>Data berhasil diperbarui ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('index2');
	}

	// delete
	function hapusDataindex2( $id )
	{
		$this->M_index2->deleteDataindex2( $id );
		// add session
		$this->session->set_flashdata('msg', '<div class="alert alert-mint"><strong>Hapus Berhasil !</strong><p>Data berhasil dihapus ke dalam database pada tanggal '.date('d F Y H:i:s A').'</p></div>');

		// redirect
		redirect('index2');

	}

	// Search
	function cariindex2()
	{
		// post
		$text = $this->input->post('cari');
		// get data
		$getVal = $this->M_index2->searchindex2( $text );

		if ( $getVal->num_rows() > 0 )
		{

			$this->session->set_flashdata('msg', '<div class="alert alert-info"><strong>Pencarian ditemukan !</strong><p>'.$getVal->num_rows().' data magang berhasil ditemukan. | '.date('d F Y H:i:s A').'</p></div>');

			$data = array(
				'namamodule' 	 => "index2",
				'namafileview' 	 => "v_index2",

				// variable
				'tampilDataPrak' => $getVal
			);
			echo Modules::run('template/inventoriTemplate', $data);

		} else {

			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><strong>Maaf pencarian tidak ditemukan !</strong><p> Pencarian pada tanggal '.date('d F Y H:i:s A').'</p></div>');

			$data = array(
				'namamodule' 	 => "index2",
				'namafileview' 	 => "v_index2",

				// variable
				'tampilDataPrak' => $getVal
			);
			echo Modules::run('template/inventoriTemplate', $data);
		}
	}
}
