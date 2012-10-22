<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//lazy print_r :D
function printr($data)
{
	echo '<pre>';
	printr($data);
	echo '</pre>';
}