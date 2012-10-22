<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Splash extends CI_Controller {

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
		if(!empty($_POST)){
			//$this->load->model('early_adaptor');
			//$this->early_adaptor->save_adaptor($_POST);
			printr($_POST);
		}
		
		$this->layout->layout('layouts/splash');
		$this->layout->view('splash-view');
	}
	
	public function save_adaptors(){
		printr($_REQUEST);
	}
}

/* End of file splash.php */
/* Location: ./application/controllers/splash.php */