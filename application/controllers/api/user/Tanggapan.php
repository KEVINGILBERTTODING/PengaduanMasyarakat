<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Tanggapan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('User_model', 'user_model');
		$this->load->model('Pengaduan_model', 'pengaduan_model');
		$this->load->model('Tanggapan_model');
	}




	public function getTanggapanById()
	{
		$idPengaduan = $this->input->get('id_pengaduan');
		$data = $this->Tanggapan_model->getTanggapannById($idPengaduan);
		echo json_encode($data);
	}
}




/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
