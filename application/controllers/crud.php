<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller 
{
	public function index()
	{
		$data = $this->crud_model->GetMahasiswa();
		$this->load->view('view_crud',array('data' => $data));
		
	}

	public function add_data()
	{
		$this->load->view('form_add');
	}

	public function do_insert()
	{
		$npm = $_POST['npm'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];

		$data_insert = array(
			'npm' => $npm,
			'nama' => $nama,
			'alamat' => $alamat,
			);
		$hasil = $this->crud_model->InsertData('tb_mahasiswa',$data_insert);
		if($hasil>=1)
		{
			//echo "<h2>Insert Data Sukses</h2>";
			$this->session->set_flashdata('pesan',"Tambah Data Sukses");

			redirect('crud/index');

		}else{
			echo "<h2>Insert Data Gagal</h2>";
		}
	}
}

