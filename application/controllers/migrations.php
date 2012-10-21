<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migrations extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$this->load->view('migrations/index');
	}
	
	public function migrate()
	{
		if(!empty($_POST) && $_POST['username'] == 'admin' && $_POST['password'] == 'sh0pw1th'){
			$this->load->library('migration');
	
			if( !$this->migration->current() )
			{
				show_error($this->migration->error_string());
			}
			
			$this->load->view('migrations/migrate');
		}
		else
			redirect(base_url('migrations'));
	}
}

/* End of file migrations.php */
/* Location: ./application/controllers/migrations.php */