 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MX_Controller {


	function __construct()
	{
		parent:: __construct();

		// load model
		$this->load->model('login/M_master_userid');
		$this->load->model('login/M_session');
		$this->load->model('M_profile');

		
	}
function index()
	{
		// view
		$data = array(
			'namamodule' 	=> "profile_cv",
			'namafileview' 	=> "V_profile",

			// variable
			
		);
		echo Modules::run('template/tampilAdmin', $data);
	}
}
