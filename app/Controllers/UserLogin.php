<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\BlogModel;

class UserLogin extends BaseController
{
	public function login()
	{
		// helper('form');
		helper(['form', 'url']);

		$model = new UserModel();
		$email = $this->request->getVar('email');

		$fetchUser = $model->getUsers($email);
		
		if ($fetchUser) {
			$result = array(
				'result' => $fetchUser,
				'success' => true,
				'message' => 'Email correct'
			);
		}else {
			$result = array(
				// 'result' => $fetchUser,
				'success' => false,
				'message' => 'Email incorrect'
			);
		}

		// $this->request->getVar('email');
		// return view('Login');
		// echo $this->request->getVar('email');

		// Initialization of session
		// $session = \Config\Services::session();
		// 2 parameters = first is the name of the session & second is value of session
		// $session->setFlashdata('success', 'Email correct');


		$data = [
			// 'data' => array(				
				'data' => $result			
			// )
		];
		// $this->response->setJSON($data);
		// return redirect()->to( base_url('/') );


		return $this->response->setJSON($data);		
	}

	public function homepage()
	{
		// helper(['url']);
		$result = $this->request->getVar('data');

		$data = [
			'data' => $result
		];
		// $model = new BlogModel();
		// // getPosts = model function to get all data
		// $data['news'] = $model->getPosts();


		// echo view('templates/header', $data);
		// echo view('pages/home');
		// echo view('templates/footer');
		// return redirect()->to( base_url('pages/homePage') );
		return $this->response->setJSON($data);
	}


	public function passwordAuth() {
		// helper
		helper(['form', 'url']);

		$model = new UserModel();
		// getVar/getPost
		// if (isset($this->request->getPost('password'))) {
		 	$password = $this->request->getPost('password');

		 	if ($password) {
				$fetchUser = $model->getUserPassword($password);

				if ($fetchUser) {
					$result = array(
						'result' => $fetchUser,
						'success' => true,
						'message' => 'Password Correct'
					);
				}else {
					$result = array(
						'success' => false,
						'message' => 'Password Incorrect'
					);
				}

				$data = [
					'data' => $result
				];

				return $this->response->setJSON($data);
			}else {
				return redirect()->to( base_url('/') );			
			}
		// }


		// return view('/');		
	}

	function register() {
		helper(['form', 'url']);

		// $model = new BlogModel;

		$db      = \Config\Database::connect();
     	$builder = $db->table('users');

		// $firstname = $this->request->getVar('firstname');
		// $middlename = $this->request->getVar('middlename');
		// $lastname = $this->request->getVar('lastname');
		// $email = $this->request->getVar('email');
		// $password = $this->request->getVar('password');

     	$data = array(
            'first_name' => $this->request->getVar('firstname'),
			'middle_name' => $this->request->getVar('middlename'),
			'last_name' => $this->request->getVar('lastname'),
			'email' => $this->request->getVar('email'),
			'password' => $this->request->getVar('password')
        );

		$save = $builder->insert($data);

		$data = [
			'data' => array(
				'message' => 'Successfully registered',
				'data' => $save
			)
		];

		return $this->response->setJSON($data);
	}

	//--------------------------------------------------------------------



	// Form

	public function form($value='')
	{

		$request = \Config\Services::request();

		$model = new UserModel();
		if (isset($_POST['username']) && isset($_POST['password'])) {
			$username = $request->getPost('username');
			$password = $request->getPost('password');

			$credentials = array(
				'email' => $username,
				'password' => $password
			);
			$specific_user = $model->loginCredentials($credentials);

			if ($specific_user) {

				$session = \Config\Services::session();
				$userdata = array(
					'email' => $username,
					'logged_in' => true
				);

				$session->set($userdata);
				// echo true;
				// return true;
				return redirect()->to('/pages/homePage/');

			}
		}
		
		return redirect()->to('/');

	}

	public function logout($value='')
	{
		session()->destroy();
		return redirect()->to('/');
	}

}
