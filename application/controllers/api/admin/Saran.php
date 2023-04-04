<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'admo');
		$this->load->model('Saran_model', 'samo');
	}

	public function getAllSaran()
	{
		$data = $this->samo->getAllsaran();
		echo json_encode($data);
	}
}
