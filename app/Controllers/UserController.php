<?php namespace App\Controllers;

use CodeIgniter\Controller;

class UserController extends BaseController
{
    public function index()
    {    	
  //   	// Instantiation
        $model = new \App\Models\BlogModel();
        $pager = \Config\Services::pager();
        // $data['blog'] = $model->getPosts();	
        $data = [
            'blog' => $model->paginate(5),
            'pager' => $model->pager
        ];

		// return view('blog/create', $data);

        echo view('templates/header', $data);
		echo view('blog/create');
		echo view('templates/footer');
    }
}