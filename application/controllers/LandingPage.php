<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage extends CI_Controller {

	public function __construct()
   	{
		parent::__construct();
    	$this->load->model('m_heroes');
   	}

	public function index()
	{
		$data['heroes'] = $this->m_heroes->getAllHeroes();
		$this->load->view('v_landing_page', $data);
	}

	public function search_heroes()
	{
		$kyeword = $this->input->post('keyword');

		$data = $this->m_heroes->getHeroes($kyeword);
		echo json_encode($data);
	}

}
