<?php namespace App\Controllers;

class UserLogin extends BaseController
{
	public function login()
	{
		helper('form');

		// $this->request->getVar('email');
		// return view('Login');
		echo $this->request->getVar('email');
	}

	//--------------------------------------------------------------------

}
