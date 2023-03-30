<?php
defined('BASEPATH') or exit('No direct script access allowed');


class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user_model');
	}


	public function getUserById()
	{
		$userId = $this->input->get('user_id');
		$userData = $this->user_model->getUserByUserId($userId);

		echo json_encode($userData);
	}
}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
