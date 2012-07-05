<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Music extends CI_Controller {

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
            $this->smview->display( 'music/index.html' ) ;
                
            
	}
       public function upload()
	{
           $this->smview->display( 'music/uploadmusic.html' ) ;
 
	}
        public function view()
	{
           $this->smview->display( 'music/musicview.html' ) ;
 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */