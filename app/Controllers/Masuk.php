<?php

namespace App\Controllers;

use App\Models\Model_users;

class Masuk extends BaseController
{
	private $m_user;
	private $session;

	public function __construct()
	{
		$this->m_user = new Model_users();
		$this->session = \Config\Services::session();
	}

	public function index()
	{
		return view('masuk');
	}

	public function auth()
	{
		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');

		$data = $this->m_user->find_user($email);

		if (isset($data->email)) {
			$hashed = $this->m_user->find_user($email)->password;
			if (($email == $this->m_user->find_user($email)->email) && password_verify($password, $hashed)) {
				$data_session = [
					'isLoggedIn' => true,
					'role' => $data->role,
					'liliefors' => $data->liliefors,
					'penulisan' => $data->penulisan,
					'fotografi' => $data->fotografi,
					'desain' => $data->desain,
					'videografi' => $data->videografi,
				];

				$this->session->set($data_session);

				if ($this->m_user->find_user($email)->role == 1) {
					return redirect()->to(base_url('admin/pengumuman'));
				} else {
					return redirect()->to(base_url());
				}
			} else {
				$this->session->setFlashdata('failed', "Email atau Kata Sandi Salah");
				return redirect()->to(base_url('/masuk'));
			}
		} else {
			$this->session->setFlashdata('failed', "Email atau Kata Sandi Salah");
			return redirect()->to(base_url('/masuk'));
		}
	}
}
