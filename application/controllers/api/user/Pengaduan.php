<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Pengaduan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('User_model', 'user_model');
		$this->load->model('Pengaduan_model', 'pengaduan_model');
	}


	public function create()
	{

		$config['upload_path'] = './assets/img/img_pengaduan/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '2048';

		$this->load->library('upload', $config);
		$data = array();

		if ($this->upload->do_upload('foto')) {
			$data['foto'] = $this->upload->data('file_name');
		} else {
			$response = [
				'status' => 'error',
				'code' => 400

			];
			echo json_encode($response);
		}

		if ($this->upload->do_upload('foto1')) {
			$data['foto1'] = $this->upload->data('file_name');
		} else {
			$data['error'] = $this->upload->display_errors();
		}

		if ($this->upload->do_upload('foto2')) {
			$data['foto2'] = $this->upload->data('file_name');
		} else {
			$data['error'] = $this->upload->display_errors();
		}

		if (isset($data['error'])) {
			// echo json_encode($data['error']);
		} else {

			$isiLaporan = $this->input->post('isi_laporan');
			$jenis = $this->input->post('jenis');
			$tglPengaduan = date('Y-m-d H:i:s');
			$idMasyarakat = $this->input->post('id_masyarakat');
			$idKelurahan = $this->input->post('id_kelurahan');


			$data = [
				'isi_laporan' => $isiLaporan,
				'jenis' => $jenis,
				'tgl_pengaduan' => $tglPengaduan,
				'foto' => $data['foto'],
				'foto1' => $data['foto1'],
				'foto2' => $data['foto2'],
				'id_masyarakat' => $idMasyarakat,
				'id_kelurahan' => $idKelurahan,


			];

			$insert = $this->pengaduan_model->insertPengaduan($data);
			if ($insert == true) {
				$response = [
					'status' => 'success',
					'code' => 200,
					'message' => 'Berhasil mengirim pengaduan'
				];
				echo json_encode($response);
			} else {
				$response = [
					'status' => 'error',
					'code' => 500,
					'message' => 'Gagal mengirim pengaduan'
				];
				echo json_encode($response);
			}
		}
	}

	public function getKecamatan()
	{
		$kecamatan = $this->pengaduan_model->getKecamatan();
		echo json_encode($kecamatan);
	}

	public function getkelurahan()
	{
		$idKecamatan = $this->input->get("id_kecamatan");
		$kelurahan = $this->pengaduan_model->getkelurahan($idKecamatan);
		echo json_encode($kelurahan);
	}

	public function getAllPengaduan()
	{
		$data = $this->pengaduan_model->getAllPengaduan();
		echo json_encode($data);
	}


	public function getPengaduanByUserId()
	{
		$idMasyarakat = $this->input->get('id_masyarakat');
		$jenis = $this->input->get("jenis");
		$data = $this->pengaduan_model->getPengaduanByUserId($jenis, $idMasyarakat);
		if ($data != null) {
			echo json_encode($data);
		} else {
		}
	}

	public function update()
	{


		$isiLaporan = $this->input->post('isi_laporan');
		$id_pengaduan = $this->input->post('id_pengaduan');
		$jenis = $this->input->post('jenis');
		$tglPengaduan = date('Y-m-d H:i:s');
		$idMasyarakat = $this->input->post('id_masyarakat');
		$idKelurahan = $this->input->post('id_kelurahan');


		$data = [
			'isi_laporan' => $isiLaporan,
			'jenis' => $jenis,
			'tgl_pengaduan' => $tglPengaduan,
			'id_masyarakat' => $idMasyarakat,
			'id_kelurahan' => $idKelurahan,


		];

		$update = $this->pengaduan_model->updatePengaduan($id_pengaduan, $data);
		if ($update == true) {
			$response = [
				'status' => 'success',
				'code' => 200,
				'message' => 'Berhasil mengubah pengaduan'
			];
			echo json_encode($response);
		} else {
			$response = [
				'status' => 'error',
				'code' => 500,
				'message' => 'Gagal mengubah pengaduan'
			];
			echo json_encode($response);
		}
	}

	public function updateImage()
	{

		$field = $this->input->post('field');
		$id_pengaduan = $this->input->post('id_pengaduan');

		$config['upload_path'] = './assets/img/img_pengaduan/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '2048';

		$this->load->library('upload', $config);
		$data = array();

		if ($this->upload->do_upload('foto')) {
			$data['foto'] = $this->upload->data('file_name');
		} else {
			$response = [
				'status' => 'error',
				'code' => 400

			];
			echo json_encode($response);
		}

		if (isset($data['error'])) {
			echo json_encode($data['error']);
		} else {




			$data = [

				$field => $data['foto'],
				'tgl_pengaduan' => date('Y-m-d H:i:S')


			];

			$update = $this->pengaduan_model->updatePengaduan($id_pengaduan, $data);
			if ($update == true) {
				$response = [
					'status' => 'success',
					'code' => 200,
					'message' => 'Berhasil mengubah pengaduan'
				];
				echo json_encode($response);
			} else {
				$response = [
					'status' => 'error',
					'code' => 500,
					'message' => 'Gagal mengubah pengaduan'
				];
				echo json_encode($response);
			}
		}
	}

	public function getPengaduanById()
	{
		$idPengaduan = $this->input->get('id_pengaduan');
		$data = $this->pengaduan_model->getPengaduanByIdPengaduan($idPengaduan);
		echo json_encode($data);
	}


	public function getTanggapanById()
	{
		$idPengaduan = $this->input->get('id_pengaduan');
		$data = $this->pengaduan_model->getTanggapanById($idPengaduan);
		echo json_encode($data);
	}

	public function filterPengaduan()
	{
		$idMasyarakat  = $this->input->get('id_masyarakat');
		$jenis = $this->input->get('jenis');
		$dateStart = $this->input->get('date_start');
		$dateEnd = $this->input->get('date_end');

		if ($jenis == "semua") {
			$data = $this->pengaduan_model->getFilterPengaduanSemua($idMasyarakat, $dateStart, $dateEnd);
		} else {
			$data = $this->pengaduan_model->getFilterPengaduan($jenis, $idMasyarakat, $dateStart, $dateEnd);
		}
		echo json_encode($data);
	}
}




/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
