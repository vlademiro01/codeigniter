<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tab_ul extends CI_Controller {

	public function __construct()
	{

       		parent::__construct();
		
		$this->load->library('form_validation');
		$this->load->model('tab_ul_model');

	}

	public function index()
	{
            
                $header['title'] = "Usuários do laboratório";
                $this->load->view('templates/header',$header);
                
                $data['listagem'] = $this->tab_ul_model->get_data();
                $this->load->view('templates/content', $data );
                
                $this->load->view('templates/footer');
                
	}

        public function form()
	{
                $header['title'] = "Usuários do laboratório";
                $this->load->view('/templates/header',$header);
                               
                $this->load->view('/templates/footer');
	}
    
    
/*
	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}
*/
}