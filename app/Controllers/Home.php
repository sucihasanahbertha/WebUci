<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------
	public function show()
	{
		$data['nama'] = 'Suci Hasanah Bertha';
		$data['npm'] = '1817051003';
		echo view('mahasiswa/header', $data);
		echo view('mahasiswa/index', $data);
		echo view('mahasiswa/footer', $data);
	}
}
