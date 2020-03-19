 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {


	function __construct()
	{
		parent:: __construct();

		// load model
		$this->load->model('login/M_master_userid');
		$this->load->model('login/M_session');
		$this->load->model('M_dashboard');

		
	}
function index()
	{
		// view
		$data = array(
			'namamodule' 	=> "dashboard",
			'namafileview' 	=> "V_dashboard",

			// variable
			
		);
		echo Modules::run('template/tampilAdmin', $data);
	}
}
