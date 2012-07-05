<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_config extends CI_Model {

	public function __construct()
    {
		/* «Øºc¤l */
    	parent::__construct();
		
		
		
		
		$this->smview->assign( 'THISHOST' 		, THISHOST 					) ;
		$this->smview->assign( 'ROOTHOST' 		, ROOTHOST 					) ;
		
		
		$controller = $this->uri->segment(1) ;
    	if( empty($controller) )
    		$controller = 'main' ;
		$this->smview->assign( 'controller' 	, $controller 				) ;
    	$this->smview->assign( 'function'	 	, $this->uri->segment(2) 	) ;
    	$this->smview->assign( 'action' 		, $this->uri->segment(3) 	) ;		
		
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */