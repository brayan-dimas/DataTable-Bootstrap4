<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

/**
 * 
 */
class UserModel extends Model
{
	// table name
	protected $table = 'users';	
	protected $allowedFields = ['first_name', 'middle_name', 'last_name', 'email', 'password'];

	public function getUsers($email = null)
	{
		// if (!$email) = walang laman i fefetch nya lahat
		if (!$email) {
			return $this->findAll();
		}	

		// return the specific request data of email. isang result in database
		return $this->asArray()
					->where(['email' => $email])
					->first();
	}


	// public function getPostsById($id = null)
	// {
	// 	// if (!$id) = walang laman i fefetch nya lahat
	// 	if (!$id) {
	// 		return $this->findAll();
	// 	}	

	// 	// return the specific request data of id. isang result in database
	// 	return $this->asArray()
	// 				->where(['id' => $id])
	// 				->first();
	// }
}

?>