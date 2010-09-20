<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Access {
		
		
		var $CI;
		
 		function __construct() 
 		{
        	$this->CI =& get_instance();
        	$this->CI->load->library('session');
	   	
    	}
	
		
}

/* End of file Access.php */
