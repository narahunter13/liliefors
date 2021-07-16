<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Model_users;

class Registrasi extends BaseController
{
	private $validation;
	private $session;
	private $m_user;

	public function __construct()
	{
		$this->validation = \Config\Services::validation();
		$this->session = \Config\Services::session();
		$this->m_user = new Model_users();
	}

	public function index()
	{
		return view('registrasi');
	}

	public function create()
	{
		$email = $this->request->getPost('email');
		$nama = $this->request->getPost('nama');
		$password = $this->request->getPost('password');
		$konfirmasi = $this->request->getPost('konfirmasi_password');

		$test = [
			'email' =>  $email,
			'nama' => $nama,
			'password' => $password,
			'konfirmasi' => $konfirmasi
		];

		$this->validation->setRules([
			'email' => 'required|valid_email',
			'nama' => 'required|min_length[3]',
			'password' => 'required|min_length[5]',
			'konfirmasi' => 'required|matches[password]'
		],[
			'email' => [
				'required' => "Email harus diisi",
				'valid_email' => "Format email salah"
			],
			'nama' => [
				'required' => "Nama lengkap harus diisi",
				'min_length' => "Nama harus memiliki minimal 3 karakter"
			],
			'password' => [
				'required' => "Kata sandi harus diisi",
				'min_length' => "Kata sandi harus memiliki minimal 5 karakter"
			],
			'konfirmasi' => [
				'required' => "Konfirmasi kata sandi harus diisi",
				'matches' => "Kata sandi tidak sesuai"
			]
		]);

		if($this->validation->run($test)) {
			$data = [
				'email' =>  $email,
				'nama' => $nama,
				'password' => password_hash($password, PASSWORD_BCRYPT)
			];

			$this->m_user->register($data);
			$this->session->setFlashdata('success', "Akun berhasil dibuat. Silahkan masuk menggunakan akun");
			return redirect()->to(base_url('/masuk'));
		} else {
			$this->session->setFlashdata('errors', $this->validation->getErrors());
			return redirect()->back()->withInput();
		}
	}
}
