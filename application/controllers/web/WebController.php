<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

	public function home()
	{
        $this->load->view('template/web/app');
    }
    
}
