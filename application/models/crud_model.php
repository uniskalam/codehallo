<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model
{
		public function GetMahasiswa($where="")
		{
			$data = $this->db->query('select*from tb_mahasiswa'.$where);
			return $data->result_array();
		}

		public function InsertData($tableName, $data)
		{
			$hasil = $this->db->insert($tableName, $data);
			return $hasil;
		}
	
}

