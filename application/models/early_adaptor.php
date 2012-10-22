<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Early_adaptor extends CI_Model {
	
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	function save_adaptor($data)
	{
		printr($data);
	}
}