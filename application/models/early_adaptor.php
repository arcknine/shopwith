<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Early_adaptor extends CI_Model {
	
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	function save_adaptor($data)
	{
		$data 	= get_attr($data);
		
		$table = $data['table'];
		$data 	= $data['attr'];
		$data['created_at'] = strtotime("now");
		if($this->db->insert($table	, $data))
		{
			$this->load->library('email');
			
			$this->email->from('no-reply@shopwith.net', 'Shopwith.net');
			$this->email->to('keenan@smartstartupidea.com, reynaldo@smartstartupidea.com'); 
			$this->email->subject('[Shopwith.net] Sign-up');
			$msg = $this->load->view('email/early-adaptor', $data, true);
			$this->email->message('Testing the email class.');	
			$this->email->send();
		}
	}
}