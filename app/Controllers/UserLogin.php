<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

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

}
