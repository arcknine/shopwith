<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//lazy print_r :D
function printr($data)
{
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}

function set_attr($data)
{
	
}

function get_attr($data)
{
	foreach($data as $key => $values)
	{
		if($key != 'submit')
		{
			$result['table'] = $key;
			foreach($values as $child_key => $child_values)
			{
				$result['attr'][$child_key] = $child_values;
			}
		}
	}
	return $result;
}