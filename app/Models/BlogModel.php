<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

/**
 * 
 */
class BlogModel extends Model
{
	// table name
	protected $table = 'blog';	
	protected $allowedFields = ['title', 'slug', 'body'];

	public function getPosts($slug = null)
	{
		// if (!$slug) = walang laman i fefetch nya lahat
		if (!$slug) {
			return $this->findAll();
		}	

		// return the specific request data of slug. isang result in database
		return $this->asArray()
					->where(['slug' => $slug])
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