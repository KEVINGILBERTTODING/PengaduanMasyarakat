<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'admo');
		$this->load->model('Log_model', 'lomo');
	}

	public function getUser()
	{
		$this->db->order_by('jabatan', 'asc');
		return $this->db->get('user')->result_array();
	}

	public function getUserById($id_user)
	{
		return $this->db->get_where('user', ['id_user' => $id_user])->row_array();
	}

	public function addUser()
	{
		$dataUser = $this->admo->getDataUserAdmin();
		$isi_log_2 = 'Pengguna ' . $dataUser['username'] . ' mencoba menambahkan user';
		$this->admo->userPrivilege('user', $isi_log_2);

		$data = [
			'nama' 			=> ucwords(strtolower($this->input->post('nama', true))),
			'username' 		=> $this->input->post('username', true),
			'password'		=> password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
			'no_telepon'	=> $this->input->post('no_telepon', true),
			'jabatan'		=> strtolower($this->input->post('jabatan', true))
		];

		$this->db->insert('user', $data);

		$isi_log = 'Pengguna ' . $data['username'] . ' dengan jabatan ' . $data['jabatan'] . ' berhasil ditambahkan';
		$this->lomo->addLog($isi_log, $dataUser['id_user']);
		$this->session->set_flashdata('message-success', $isi_log);
		redirect('user');
	}

	public function editUser($id_user)
	{
		$dataUser = $this->admo->getDataUserAdmin();
		$isi_log_2 = 'Pengguna ' . $dataUser['username'] . ' mencoba mengubah user ber id ' . $id_user;
		$this->admo->userPrivilege('user', $isi_log_2);

		$data_user = $this->getUserById($id_user);
		$username  = $data_user['username'];
		$data = [
			'nama' 			=> ucwords(strtolower($this->input->post('nama', true))),
			'no_telepon'	=> $this->input->post('no_telepon', true),
			'jabatan'		=> strtolower($this->input->post('jabatan', true))
		];

		$this->db->update('user', $data, ['id_user' => $id_user]);

		$isi_log = 'Pengguna ' . $username . ' berhasil diubah';
		$this->lomo->addLog($isi_log, $dataUser['id_user']);
		$this->session->set_flashdata('message-success', $isi_log);
		redirect('user');
	}

	public function removeUser($id_user)
	{
		$dataUser = $this->admo->getDataUserAdmin();
		$isi_log_2 = 'Pengguna ' . $dataUser['username'] . ' mencoba menghapus user ber id ' . $id_user;
		$this->admo->userPrivilege('user', $isi_log_2);


		$data_user = $this->getUserById($id_user);
		$username  = $data_user['username'];

		$this->db->delete('user', ['id_user' => $id_user]);

		$isi_log = 'Pengguna ' . $username . ' berhasil dihapus';
		$this->lomo->addLog($isi_log, $dataUser['id_user']);
		$this->session->set_flashdata('message-success', $isi_log);
		redirect('user');
	}

	public function auth($username, $password)
	{
		$this->db->select('*');
		$this->db->from('masyarakat');
		$this->db->where('username', $username);
		$rsltUnm = $this->db->get()->row_array();

		if ($rsltUnm == null) {
			return false;
		} else {

			if (password_verify($password, $rsltUnm['password'])) {
				return $rsltUnm;
			} else {
				return false;
			}
		}
	}

	public function register($data)
	{
		$insert = $this->db->insert('masyarakat', $data);
		if ($insert) {
			return true;
		} else {
			return false;
		}
	}

	public function update($id, $data)
	{
		$update = $this->db->where('id_masyarakat', $id);
		$update = $this->db->update('masyarakat', $data);
		if ($update) {
			return true;
		} else {
			return false;
		}
	}

	public function passValidation($userId, $passwordOld)
	{
		$this->db->select('password');
		$this->db->from('masyarakat');
		$this->db->where('id_masyarakat', $userId);
		$dataUser = $this->db->get()->row_array();

		if (password_verify($passwordOld, $dataUser['password'])) {
			return true;
		} else {
			return false;
		}
	}

	public function getUserByUserId($id)
	{
		$this->db->select('*');
		$this->db->from('masyarakat');
		$this->db->where('id_masyarakat', $id);
		return $this->db->get()->result_array();
	}
	public function authAdmin($username, $password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$rsltUnm = $this->db->get()->row_array();

		if ($rsltUnm == null) {
			return false;
		} else {

			if (password_verify($password, $rsltUnm['password'])) {
				return $rsltUnm;
			} else {
				return false;
			}
		}
	}

	public function passAdminValidation($userId, $passwordOld)
	{
		$this->db->select('password');
		$this->db->from('user');
		$this->db->where('id_user', $userId);
		$dataUser = $this->db->get()->row_array();

		if (password_verify($passwordOld, $dataUser['password'])) {
			return true;
		} else {
			return false;
		}
	}

	public function updateAdmin($id, $data)
	{
		$update = $this->db->where('id_user', $id);
		$update = $this->db->update('user', $data);
		if ($update) {
			return true;
		} else {
			return false;
		}
	}

	public function getAdminByUserId($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user', $id);
		$this->db->order_by('username', 'desc');

		return $this->db->get()->result_array();
	}


	public function getAllUser($userId)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user !=', $userId);
		$this->db->order_by('username', 'DESC');
		return $this->db->get()->result();
	}

	public function deleteUserbyUserId($userID)
	{
		$delete = $this->db->where('id_user', $userID);
		$delete = $this->db->delete('user');

		if ($delete) {
			return true;
		} else {
			return false;
		}
	}

	public function updateUserById($idUser, $data)
	{
		$update = $this->db->where('id_user', $idUser);
		$update = $this->db->update('user', $data);

		if ($update) {
			return true;
		} else {
			return false;
		}
	}

	public function getUserByuserId2($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user', $id);
		return $this->db->get()->result();
	}

	public function insertUser($data)
	{
		$insert = $this->db->insert('user', $data);
		if ($insert) {
			return true;
		} else {
			return false;
		}
	}

	public function getUserByUsername($username)
	{
		$this->db->select('username');
		$this->db->from('user');
		$this->db->where('username', $username);
		$cek =  $this->db->get()->result();

		if ($cek != null) {
			return false;
		} else {
			return true;
		}
	}
}
