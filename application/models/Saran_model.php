<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saran_model extends CI_Model
{
	public function getSaran()
	{
		$this->db->order_by('tgl_saran', 'desc');
		return $this->db->get('saran')->result_array();
	}

	public function inseertSaran($data)
	{
		$insert = $this->db->insert('saran', $data);
		if ($insert) {
			return true;
		} else {
			return false;
		}
	}

	public function getAllsaran()
	{
		$this->db->select('*');
		$this->db->from('saran');
		return $this->db->get()->result();
	}
}
